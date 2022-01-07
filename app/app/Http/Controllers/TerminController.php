<?php

namespace App\Http\Controllers;

use App\Http\Resources\TerminCollectionResource;
use App\Http\Resources\TerminResource;
use App\Models\Termin;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
    public function store(Request $request)  //cuva objekte u bazi pozivanjem post metode
    {
        $validator = Validator::make($request->all(), [
            'adresaLokala' => 'required|string|max:50',
            'vreme' => 'required',
            'kozmeticar_id' => 'required', 
            'tretman_id' => 'required'
             
        ]);

        if ($validator->fails()) 
            return response()->json($validator->errors());
        $t = Termin::create([
            'adresaLokala' => $request->adresaLokala, 
            'vreme' => $request->vreme, 
            'kozmeticar_id' => $request->kozmeticar_id,
            'tretman_id' => $request->tretman_id
        ]);
        $t->save();
        return response()->json(['Termin kreiran!', new TerminResource($t)]);
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
        if($termin){
            return new TerminResource($termin);
        }
        return response()->json('Trazeni objekat ne postoji u bazi');
      
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
    public function update(Request $request,$id)
    {
        $validator = Validator::make($request->all(), [
            'adresaLokala' => 'string|max:50',
            'vreme' => '',
            'kozmeticar_id' => '', 
            'tretman_id' => ''
             
        ]);

        $t = Termin::find($id);

        if($t){
            $t->adresaLokala=$request->adresaLokala;
            $t->vreme=$request->vreme;
            $t->kozmeticar_id=$request->kozmeticar_id;
            $t->tretman_id=$request->tretman_id;
            $t->save();
            return response()->json(['Uspesno izmenjeno!', new TerminResource($t)]);

        }else{
            return response()->json('Trazeni objekat ne postoji u bazi');

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Termin  $termin
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $t = Termin::find($id);

        if($t){
            
            $t->delete();
            return response()->json(['Uspesno obrisano!', new TerminResource($t)]);

        }else{
            return response()->json('Trazeni objekat ne postoji u bazi');

        }
    }
}
