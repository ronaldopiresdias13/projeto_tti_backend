<?php

namespace App\Http\Controllers;

use App\Models\Salons;
use Illuminate\Http\Request;

class SalonsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Salons::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Salons::create([
            'name' =>$request->name,
            'about' =>$request->about,
            'cep' =>$request->cep,
            'phone' =>$request->phone,
            'city_id' =>$request->city_id,
            'whatsapp' =>$request->whatsapp,
            'status' =>$request->status,
            'rua' =>$request->rua,
            'number' =>$request->number,
            'bairro' =>$request->bairro,
            'latitude' =>$request->latitude,
            'longitute' =>$request->longitude,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Salons::find("id",$id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Salons::update([
            'name' =>$request->name,
            'about' =>$request->about,
            'cep' =>$request->cep,
            'phone' =>$request->phone,
            'city_id' =>$request->city_id,
            'whatsapp' =>$request->whatsapp,
            'status' =>$request->status,
            'rua' =>$request->rua,
            'number' =>$request->number,
            'bairro' =>$request->bairro,
            'latitude' =>$request->latitude,
            'longitute' =>$request->longitude,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Salons=Salons::find("id",$id);
        $Salons->delete();
    }
}
