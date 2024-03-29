<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChecklistStoreRequest;
use App\Models\Checklist;
use App\Models\Forms\Answer;
use App\Models\Forms\Form;
use App\Models\Forms\Question;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

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
        return view('checklists.index', compact('checklists', 'forms'));
    }

    public function checklist_pdf(Checklist $checklist)
    {
        $pdf = App::make('dompdf.wrapper');
        $pdf = $pdf->loadView('pdf.checklists.inspection', compact('checklist'));
        // return $pdf->download('inspection.pdf');
        // $this->emailChecklist($checklist);

        return $pdf->stream();
    }
    public function emailChecklist(Checklist $checklist)
    {
        // dd($checklist);
        $path = public_path('uploads');
        $name = 'checklist_' . $checklist->id . '.pdf';
        $filename = $path . '/' . $name;
        // create folder
        if (!File::exists($path)) {
            File::makeDirectory($path, $mode = 0777, true, true);
        }

        $pdf = App::make('dompdf.wrapper');
        $pdf = $pdf->loadView('pdf.checklists.inspection', compact('checklist'))
            ->save($filename);
        // return $pdf->download('inspection.pdf');

        Mail::to(Auth::user()->email)->send(new \App\Mail\Contact($filename));

        return 0;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ChecklistStoreRequest $request)
    {
        $form = Form::find($request->checklist_form);

        if ($request->file('image')) {
            // Store image
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('images'), $filename);
            // dd(Auth::user()->id);
            // Create Checklist
            $checklist = Checklist::create([
                'title' => $request->title,
                'date_inspection' => $request->date_inspection,
                'owner' => $request->owner,
                'manufacturer' => $request->manufacturer,
                'manufacturer_number' => $request->manufacturer_number,
                'derricking' => $request->derricking,
                'image' => $filename,
                'user_id' => Auth::user()->id
            ]);
        }

        $questions = Question::where('form_id', $request->checklist_form)->get();
        return view('checklists.create', compact('questions', 'form', 'checklist'));
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
    // public function questionsForm(Form $form)
    // {
    //     $questions = Question::where('form_id', $form->id)->get();
    //     // Fetch all records


    //     return response()->json($questions);
    // }

    public function storeQuestionsForm(Request $request, Checklist $checklist)
    {
        $questions = Question::where('form_id', $request->form_id)->get();
        // dd($questions);
        foreach ($questions as $question) {
            $answer = 'answer_' . $question->id;
            $comment = 'comment_' . $question->id;
            // var_dump($request[$answer],$request[$comment]);
            Answer::create([
                'value' => $request[$answer],
                'comment' => $request[$comment],
                'checklist_id' => $checklist->id,
                'question_id' => $question->id,
            ]);
        }
        $this->emailChecklist($checklist);
        return redirect()->route('checklists.index')->with('message', 'Checklist Saved Succesfully');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Checklist  $checklist
     * @return \Illuminate\Http\Response
     */
    public function edit(Checklist $checklist)
    {
        return view('checklists.edit', compact('checklist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Checklist  $checklist
     * @return \Illuminate\Http\Response
     */
    public function update(ChecklistStoreRequest $request, Checklist $checklist)
    {
        $checklist->update($request->all());
        return redirect()->route('checklists.index')->with('message', 'Checklist updated');
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
