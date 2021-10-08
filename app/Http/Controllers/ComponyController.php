<?php

namespace App\Http\Controllers;

use App\Models\compony;
use Illuminate\Http\Request;

class ComponyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $componies = compony::all();
        return view("compony.index",['componies' =>$componies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('compony.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $compony = new compony;
        $compony ->name = $request->compony_name;
        $compony ->type = $request->compony_type;
        $compony ->description = $request->compony_description;

        $compony ->save();

        return redirect()->route('compony.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\compony  $compony
     * @return \Illuminate\Http\Response
     */
    public function show(compony $compony)
    {
        return view("compony.show", ["compony" => $compony]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\compony  $compony
     * @return \Illuminate\Http\Response
     */
    public function edit(compony $compony)
    {
        return view("compony.edit", ["compony"=> $compony]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\compony  $compony
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, compony $compony)
    {
        $compony->name = $request->compony_name;
        $compony->type = $request->compony_type;
        $compony->description = $request->compony_description;

        $compony->save();

        return redirect()->route('compony.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\compony  $compony
     * @return \Illuminate\Http\Response
     */
    public function destroy(compony $compony)
    {
        $compony->delete();
        return redirect()->route('compony.index');
    }
}
