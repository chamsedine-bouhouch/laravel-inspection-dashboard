<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $employees = User::where('isAdmin', false)->get();
        if ($request->has('search')) {
            try {
                $employees = User::where('isAdmin', false)->where('name', 'like', "%{$request->search}%")->orWhere('email', 'like', "%{$request->search}%")->get();
            } catch (\Throwable $th) {
                return $th;
            }
        }
        return view('employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserStoreRequest $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'qualification' => $request->qualification,
            'password' => Hash::make($request['password']),
        ]);
       
        return redirect()->route('employees.index')->with('message', 'employees saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $employee = User::find($id);
      
        // $myRequest = new Request();

        // return view('employees.index', [
        //     'employees' => $this->index($myRequest)
        // ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit($id)

    {

        $employee = User::find($id);
        // dd($employee);
        return view('employees.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request,$id)
    {
        $employee = User::find($id);
        $employee->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'qualification' => $request->qualification,
        ]);
        // $employee->name = $request->name;
        // $employee->email = $request->email;
        // $employee->phone = $request->phone;
        // $employee->qualification = $request->qualification;
        // $employee->save();
        // return view('employees.edit', compact('employee'));
        return redirect()->route('employees.index')->with('message', 'employees updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     
        $user = User::find($id);
        $user->delete();
        return redirect()->route('employees.index')->with('message', 'User Deleted Succesfully');
    }
}
