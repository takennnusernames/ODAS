<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\User;
use App\Models\Documents;
use App\Models\ssDocument;
use App\Models\ejsDocument;
use App\Models\transaction_info;
use Illuminate\Http\Request;
use Illuminate\Contracts\Session\Session;


class DocumentController extends Controller
{
    public function submission(){
        // dd(auth()->user()->ejsDocuments);
    //     return view('user.submission', [
    //     'ejsDocument' => ejsDocument::where('user_id', auth()->user()->id)->first(),  
    //     'ssDocument'=> ssDocument::where('user_id', auth()->user()->id)->first() 
    // ]);
    // dd();
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
        // dd();
        return view('user.submit_form', [
            'transac' => transaction_info::where('name', $request->name)->first()
        ]);
    }

    public function submitted(Request $request){
        // dd($request->file('Extrajudicial_Settle_of_Estate')->getFilename());

        

        $transaction = transaction_info::where('id', $request->transac_id)->first();


        $formFields['user_id'] = auth()->user()->id;
        $formFields['transaction_info_id'] = $transaction->id;

        $requirements = explode(',', $transaction->requirements);

        $files = "";
        foreach ($requirements as $iteration => $requirement) {
            $file_name = str_replace(' ', '_', $requirement);
            if($request->hasFile($file_name)) {
                $formFields['files'] = $request->file($file_name)->store('documents', 'public');

            Document::create($formFields);
            }
            
        }
        
        // dd($file_id);

        

        return redirect('/submission')->with('message', 'Documents Submitted');
        
    }

    public function status(){
        // dd(auth()->user()->ssDocuments);
        return view('user.status', ['ejsDocuments' => auth()->user()->ejsDocuments, 'ssDocuments' => auth()->user()->ssDocuments]);       
    }

    public function ejsShow($user_id) {
        // dd($user_id);
        return view('assessor.documents', [
            'document' => ejsDocument::where('user_id', $user_id)->first(), 'uID' => $user_id
        ]);
    }

    public function ssShow($user_id) {
        // dd($user_id);
        return view('assessor.documents', [
            'document' => ssDocument::where('user_id', $user_id)->first(), 
            'uID' => $user_id
        ]);
    }
}