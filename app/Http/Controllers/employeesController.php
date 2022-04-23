<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Models\employees;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class employeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $employees =employees::all();
        if ($request->has('search')) {
            $employees = employees::where('name', 'like', "%{$request->search}%")->orWhere('email', 'like', "%{$request->search}%")->get();
        }
       return view('employe.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *  
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('employe.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserStoreRequest $request)
    {
        employees::create([
            'name' => $request->name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'Phone' => $request->Phone,
            'Qualification' => $request->Qualification,
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->route('employees.index')->with('message','employees saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $employees = employees::find($id);
      $employees->delete();
        return view('employe.index', [
            'employees' => $employees::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(employees $employees)
    {
       return view('employe.edit' , compact(  'employees'));
    }
   

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request , $id  )
    {   
        $employees = employees::find($id);
        $employees->update([
            'name' => $request->name,
              'last_name' => $request->last_name,
              'email' => $request->email,
              'Phone' => $request->Phone,
              'Qualification' => $request->Qualification,
              
          ]);
          return redirect()->route('employe.index')->with('message','employees saved');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(employees $employee)
    {
        $employee->delete();
        return redirect()->route('employe.index')->with('message', 'User Deleted Succesfully');
    }
    
    
}

