<?php

namespace App\Http\Controllers;

use App\Models\transaction_info;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminController extends Controller
{
    public function new(Request $request)
    {

        return redirect()->route('create_new', [
            'name' => $request->name,
            'quantity' => $request->quantity
        ]);
    }

    public function create_new()
    {
        return view('admin.create_new');
    }

    public function save(Request $request)
    {
        
        // dd($request->requirement1);
        // $formFields = $request->validate([
        //     'name' => 'required'
        // ]);
        $rules = [];
        for ($i = 1; $i <= $request->quantity; $i++) {
            $inputName = 'requirement' . $i;
            $rules[$inputName] = 'required';
        }
        

        $request->validate($rules);
        $inputs = [];
        for ($i = 1; $i <= $request->quantity; $i++) {
            $var = 'requirement' . $i;
            $inputs[] = $request->$var;
        }
        $requirements = implode(',', $inputs);

        $formFields = [
            'name' => $request->name,
            'requirements' => $requirements
        ];

        // dd($formFields);

        transaction_info::create($formFields);

        return redirect('/create')->with('message', 'Transaction Successfully created');
        
    }
}
