<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Documents;
use App\Models\ssDocument;
use App\Models\ejsDocument;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Contracts\Session\Session;

class UserController extends Controller
{


    public function register()
    {
        return view('user.user_register');
    }

    public function user_registered(Request $request)
    {
        $formFields = $request->validate([
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'fName' => ['required', 'alpha'],
            'mName' => 'nullable|alpha',
            'lName' => ['required', 'alpha'],
            'address' => 'required',
            'password' => ['required', 'confirmed', 'min:6']
        ]);

        //Combine Name
        $formFields['name'] = $formFields['fName'] . ' ' . ($formFields['mName'] ?? '') . ' ' . $formFields['lName'];

        //Remove
        unset($formFields['fName']);
        unset($formFields['mName']);
        unset($formFields['lName']);

        //Hash Password
        $formFields['password'] = bcrypt($formFields['password']);


        //Create user to database
        $user = User::create($formFields);

        //Login
        auth()->login($user);

        //Create table for each type of document case
        $ejsTable['user_id'] = auth()->user()->id;
        $ejsTable['name'] = auth()->user()->name;
        $ejsTable['nullCount'] = 14;

        ejsDocument::create($ejsTable);

        $ssTable['user_id'] = auth()->user()->id;
        $ssTable['name'] = auth()->user()->name;
        $ssTable['nullCount'] = 13;

        ssDocument::create($ssTable);

        return redirect('/status')->with('message', 'Account created and logged in');
    }

    public function login(Request $request)
    {
        return view('user.login');
    }

    public function authenticate(Request $request)
    {
        $formFields = $request->validate([
            'email' => ['required', 'email',],
            'password' => 'required'
        ]);

        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();
            if (auth()->check() && auth()->user()->isAssessor())
                return redirect('/assessor');
            else
                return redirect('/submission')->with('Message', 'You are now logged in!');
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/submission')->with('message', 'You have been logged out');
    }
}
