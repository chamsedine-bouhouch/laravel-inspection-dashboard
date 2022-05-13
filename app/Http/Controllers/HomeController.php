<?php

namespace App\Http\Controllers;

use App\Models\Certification;
use App\Models\Checklist;
 use App\Models\User;
use Illuminate\Http\Request;
 
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $info=[];
        $info['employees']=User::where('isAdmin', false)->count();
        $info['checklists']=Checklist::all()->count();
        $info['certifications']=Certification::all()->count();
        // dd($info);
        return view('home',compact('info'));
    }
}
