<?php

namespace App\Http\Controllers;

use App\Http\Resources\TerminCollectionResource;
use App\Http\Resources\TerminResource;
use App\Models\Termin;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class TerminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $termini = Termin::all();
        return  TerminResource::collection($termini);
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
     * @param  \App\Models\Termin  $termin
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $termin = Termin::find($id);
        return new TerminResource($termin);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Termin  $termin
     * @return \Illuminate\Http\Response
     */
    public function edit(Termin $termin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Termin  $termin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Termin $termin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Termin  $termin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Termin $termin)
    {
        //
    }
}
