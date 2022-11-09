<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return Service::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Service::create([
            'name' => $request->name,
            'photo' => $request->photo,
            'gender' => $request->gender,
            'category_id' =>$request->category_id
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $Service
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,Service $Service)
    {
        return $Service;
    }
    public function update(Request $request, Service $Service) {
        return Service::update([
            'name' => $request->name,
            'photo' => $request->photo,
            'gender' => $request->gender,
            'category_id' =>$request->category_id
        ]);
      }
   

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $Service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $Service)
    {
        $Service->delete();
    }
}

