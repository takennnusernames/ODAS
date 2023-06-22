<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\User;
use App\Models\Documents;
use App\Models\transaction_info;
use Illuminate\Http\Request;
use Illuminate\Contracts\Session\Session;


class DocumentController extends Controller
{
    public function submission(){
        // dd(auth()->user()->ejsDocuments);
        return view('user.submission', [
            'transactions' => transaction_info::all(),
            'count' => count(transaction_info::all())
        ]);
    }

    public function submit(Request $request){
        // dd(transaction_info::where('id', $request->transaction)->get());
        return redirect()->route('submit_form', [
            'name' => $request->transaction
        ]);
    }

    public function submit_form(Request $request){
        // dd(auth()->user()->documents()->where('transaction_info_id', '1')->get()->requirement);
        $transac = transaction_info::where('name', $request->name)->first();

        return view('user.submit_form', [
            'transac' => $transac,
            'documents' => auth()->user()->documents()->where('transaction_info_id', $transac->id)->get()
        ]);
    }

    public function submitted(Request $request){
        // dd($request->file('Extrajudicial_Settle_of_Estate')->getFilename());

        $transaction = transaction_info::where('id', $request->transac_id)->first();


        $formFields['user_id'] = auth()->user()->id;
        $formFields['transaction_info_id'] = $transaction->id;

        $requirements = explode(',', $transaction->requirements);

        foreach ($requirements as $requirement) {
            $file_name = str_replace(' ', '_', $requirement);
            if($request->hasFile($file_name)) {
                $formFields['files'] = $request->file($file_name)->store('documents', 'public');
            
                $formFields['requirement'] = $requirement;
                Document::create($formFields);
            }
            
        }

        return back()->with('message', 'Documents Submitted');
        
    }

    public function status(){
        // dd(auth()->user()->ssDocuments);\
        return view('user.status', [
            'documents' => auth()->user()->documents(),
            'transactions' => transaction_info::get()
        ]);       
    }

    public function show($user_id) {
        // dd($user_id);
        return view('assessor.documents', [
            'document' => Document::where('user_id', $user_id)->get(),
            'transactions' => transaction_info::get(),
            'user' => User::where('id', $user_id)->first()
        ]);
    }

    public function show_files(Request $request) {
        $transac = transaction_info::where('name', $request->transac_name)->first();

        $user = User::where('id',$request->id)->first();

        return view('assessor.files', [
            'transac' => $transac,
            'documents' => $user->documents()->where('transaction_info_id', $transac->id)->get(),
            'user' => $user
        ]);
    }

    public function user_show_file(Request $request) {
        // dd($request->id);
        return view('user.files', [
            'transac' => transaction_info::where('id',$request->transac_id)->first(),
            'documents' => auth()->user()->documents()->where('transaction_info_id', $request->transac_id)->get()
        ]);
    }
}