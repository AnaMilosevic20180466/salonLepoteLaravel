<?php

namespace App\Http\Controllers;

use App\Http\Resources\TretmanResource;
use App\Models\Tretman;
use Illuminate\Http\Request;

class TretmanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return TretmanResource::collection(Tretman::all());
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
     * @param  \App\Models\Tretman  $tretman
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new TretmanResource(Tretman::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tretman  $tretman
     * @return \Illuminate\Http\Response
     */
    public function edit(Tretman $tretman)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tretman  $tretman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tretman $tretman)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tretman  $tretman
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tretman $tretman)
    {
        //
    }
}
