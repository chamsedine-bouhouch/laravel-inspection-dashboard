<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\rapport;
use App\Models\rapport as Modelrapport;
use Symfony\Component\Console\Input\Input;
use Illuminate\Support\Facades\Validator;

class reportcontroller extends Controller
{
    public function index(Request $request)
    {
      
       return view('repports.report');
    }
}
