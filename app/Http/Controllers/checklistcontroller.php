<?php

namespace App\Http\Controllers;

use App\Models\Checklist;
use App\Models\Forms\Form;
use App\Models\Forms\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use File;

class ChecklistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $checklist = Checklist::all();
        if ($request->has('search')) {
            $checklist = Checklist::where('title', 'like', "%{$request->search}%")->orWhere('date_inspection', 'like', "%{$request->search}%")->get();
        }
        // $path = Storage::path('form_1.json');
        // $json = json_decode($path, true);

        // $json = File::get(Storage::path('data/form_1.json'));
        // $json_data = json_decode($json);


        $forms = Form::all();
        foreach ($forms as  $form) {
            $questions = Question::where('form_id', $form->id)->get();
            $form->setAttribute('questions', $questions);
        }
        dd(response()->json($forms));

        return view('checklists.index', compact('checklist', 'json_data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
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
