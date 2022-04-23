<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\checklist;
use App\Models\checklist as Modelshecklist;
use Symfony\Component\Console\Input\Input;
use Illuminate\Support\Facades\Validator;

class checklistcontroller extends Controller
{
    public function insertchecklist(Request $request)
 { $validator = Validator::make($request->all(), [
   'titel' => 'required|string|max:255',
   'date_inspection' => 'required|date',
   'rapport_pdf' => 'required|string|min:6',
   'sticker_png' => 'required|string|max:255',
   
]);
if ($validator->fails())
{
   return response(['errors'=>$validator->errors()->all()], 422);
}else {
  
    $checklist = new checklist();
    $checklist -> titel =$request ->input('titel');
    $checklist -> date_inspection =$request ->input('date_inspection');
    $checklist -> rapport_pdf =$request ->input('rapport_pdf');
    $checklist -> sticker_png =$request ->input('sticker_png');

    if ($checklist -> save()){


    return response( )->json(['success' => true]);
   }else {
      return response()->json(['sucess'=> false]);
   }
    
}

 }
 public function index(Request $request)
 { 
   $checklist =checklist::all();
     if ($request->has('search')) {
         $checklist = checklist::where('titel', 'like', "%{$request->search}%")->orWhere('date_inspection', 'like', "%{$request->search}%")->get();
     }
     
    return view('gestchecklist.index', compact('checklist'));
 }
 public function delet(
      $id){
    
    $checklist = checklist::find($id);
    $checklist->delete();
 }
   /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
      $checklist = checklist::find($id);
      $checklist->delete();
        return view('gestchecklist.index', [
            'checklist' => checklist::all()
        ]);
    }



}
