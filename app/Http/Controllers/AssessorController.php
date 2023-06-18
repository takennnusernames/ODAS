<?php

namespace App\Http\Controllers;

use App\Models\ejsDocument;
use App\Models\ssDocument;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;

class AssessorController extends Controller
{
    //Show all users
    public function index(){
        // dd(auth()->user());
        return view('assessor.index', [
            'users' => User::paginate(10), 'ejsDocuments' => ejsDocument::get(), 'ssDocuments' => ssDocument::get()
            
        ]);
    }

    public function ejs(){
        return view('assessor/ejs', [
            'users' => User::paginate(10), 'ejsDocuments' => ejsDocument::get()
        ]);
    }

    public function ss(){
        return view('assessor/ss', [
            'users' => User::paginate(10), 'ssDocuments' => ssDocument::get()
        ]);
    }

}