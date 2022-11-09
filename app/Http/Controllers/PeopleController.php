<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\People;

class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return People::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       return User::create([
        'name' => $request->name,
        'Date' => $request->Date,
        'photo' => $request->photo,
        'cpf' => $request->cpf,
        'gender' => $request->gender,
        'user_id' => $request->user_id,
        'phone' => $request->phone,
        'cep' => $request->cep,
        'city_id' => $request->city_id,
       ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,People $People,$id)
    {
        return $People;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,People $People,$id)
    {
        return User::update([
            'name' => $request->name,
            'Date' => $request->Date,
            'photo' => $request->photo,
            'cpf' => $request->cpf,
            'gender' => $request->gender,
            'user_id' => $request->user_id,
            'phone' => $request->phone,
            'cep' => $request->cep,
            'city_id' => $request->city_id,
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
        $id->delete();
    }
}
