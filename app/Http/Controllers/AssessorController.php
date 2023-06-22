<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Document;
use App\Models\transaction_info;
use Illuminate\Http\Request;

class AssessorController extends Controller
{
    //Show all users
    public function index()
    {
        // dd(auth()->user());
        return view('assessor.index', [
            'users' => User::has('documents')->paginate(10), 'documents' => Document::get()

        ]);
    }

    public function assessment(Request $request)
    {

        // $assessment = 'assessment' . $request->id;
        // dd($request);

        $doc = Document::where('id', $request->document_id)->first();

        $requirements = transaction_info::where('name', $request->transac_name)->first()->requirements;
        $requirements = explode(',', $requirements);

        // dd($request->table_id);
        foreach ($requirements as $requirement) {
            $file_name = str_replace(' ', '_', $requirement);
            $table = 'assessment_form_' . $requirement;
            $assessment = 'assessment_' . $file_name;
            $feedback = 'feedback_' . $file_name;

            // 
            //     $request->validate([
            //         $assessment => 'required|in:accepted,denied',
            //     ]);


            // }
            if ($request->table_id == $table) {
                $formFields = $request->validate(
                    [
                        $assessment => 'required|in:accepted,denied',
                        $feedback => 'required'
                    ], [
                        $assessment . '.required' => 'The assessment field is required.',
                        $assessment . '.in' => 'The selected assessment is invalid.',
                        $feedback . '.required' => 'The feedback field is required.'
                    ]);

                $formFields['assessment'] = $formFields[$assessment];
                unset($formFields[$assessment]);
                        
                $formFields['feedback'] = $formFields[$feedback];
                unset($formFields[$feedback]);

                $doc->update($formFields);

                return back()->with('message', 'Assessment Submitted');
            }
        }

       
    }
}
