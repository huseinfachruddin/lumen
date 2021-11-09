<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function login(Request $request){
            $this->validate($request, [
                'password' => 'required',
                'email' => 'required'
            ]);
            $token = app('auth')->attempt($request->only('email', 'password'));
         
            return response()->json(compact('token'));
    }
}