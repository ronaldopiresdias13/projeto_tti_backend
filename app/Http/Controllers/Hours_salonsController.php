<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Hours_salon;

class Hours_salonsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Hours_salon::all(); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Hours_salon::create([
            "day"=> $request->day,
            "start_day"=> $request->start_day,
            "end_day"=> $request->end_day,
            "salons_id"=> $request->salons_id
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
        return Hours_salon::find($id);
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
        Hours_salon::where('id', $id)->update($request->all());    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hours_salon = Hours_salon::find($id);
        return $hours_salon->delete();
    }
}
