<?php

namespace App\Http\Controllers;

use App\Models\Certification;
use Illuminate\Http\Request;

class CertificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $certifications = Certification::all();
        // if ($request->has('search')) {
        //     $checklists = Checklist::where('title', 'like', "%{$request->search}%")->orWhere('date_inspection', 'like', "%{$request->search}%")->get();
        // }

        return view('certifications.index', compact('certifications'));
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
     * @param  \App\Models\Certification  $certification
     * @return \Illuminate\Http\Response
     */
    public function show(Certification $certification)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Certification  $certification
     * @return \Illuminate\Http\Response
     */
    public function edit(Certification $certification)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Certification  $certification
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Certification $certification)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Certification  $certification
     * @return \Illuminate\Http\Response
     */
    public function destroy(Certification $certification)
    {
        //
    }
}
