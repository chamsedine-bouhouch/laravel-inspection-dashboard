<?php

namespace App\Http\Controllers;

use App\Models\Checklist;
use App\Models\Forms\Form;
use App\Models\Forms\Question;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use File;
use Illuminate\Support\Facades\App;

class ChecklistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $checklists = Checklist::all();
        if ($request->has('search')) {
            $checklists = Checklist::where('title', 'like', "%{$request->search}%")->orWhere('date_inspection', 'like', "%{$request->search}%")->get();
        }



        $forms = Form::all();
        $questions=Question::all();
        foreach($forms as  $form) {
            $questions = Question::where('form_id', $form->id)->get();
            $form->setAttribute('questions', $questions);
        }


        return view('checklists.index', compact('checklists','forms','questions'));
    }

    public function checklist_pdf(Checklist $checklist)
    {
        // dd($checklist);
        $pdf = App::make('dompdf.wrapper');
        $pdf = $pdf->loadView('pdf.inspection', compact('checklist'));
        // return $pdf->download('inspection.pdf');
        return $pdf->stream();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $form=Form::find($request->checklist_form);
        $questions=Question::where('form_id',$request->checklist_form)->get();
        return view('checklists.create', compact('questions','form'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Checklist  $checklist
     * @return \Illuminate\Http\Response
     */
    public function show(Checklist $checklist)
    {
        return $checklist;
    }
    public function questionsForm(Form $form)
    {
       $questions=Question::where('form_id',$form->id)->get();
        // Fetch all records

 
      return response()->json($questions);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Checklist  $checklist
     * @return \Illuminate\Http\Response
     */
    public function edit(Checklist $checklist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Checklist  $checklist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Checklist $checklist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Checklist  $checklist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Checklist $checklist)
    {
        $checklist->delete();
        return redirect()->route('checklists.index')->with('message', 'Checklist Deleted Succesfully');
    }
}
