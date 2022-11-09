<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return User::all();
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
         'email' => $request->email,
         'password' => Hash::make($request->password)
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,User $user)
    {
        return $user;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updates(Request $request,User $user)
    {
        return User::update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
    }
    public function edit(Request $request,User $user)
    {
        return User::edit([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
    }
    public function verifications(Request $request){
        $user = User::firstWhere('email', $request['email']);
        if (!$user) {
            return response()->json(['message' => 'E-mail incorretos.'], 404);
        }

        if (!($request['password']== $user['password'])) {
            return response()->json([
                'message' => 'E-mail e/ou Senha incorretos.'
            ], 401);
        }else{
            return response()->json([
                'message' => 'E-mail e/ou Senha correto.'
            ], 200);
        }
    }
}
