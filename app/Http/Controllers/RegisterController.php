<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class RegisterController extends Controller
{
    public function store(Request $request){

        $request->validate([
            'login'=> ['required', 'string', 'unique:users'],
            'email'=>['required', 'string', 'email', 'unique:users'],
            'password'=>['required', 'string', 'min:6, confirmed'],
            'password'=>['required', 'string', 'min:6'],
        ]); 
        $user = User::create([
            'login'=>$request->login,
            'password'=>Hash::make($request->password),
            'role'=> 'посетитель',
            'status'=> 'Новичок',
        ]+ $request->all());

        if(auth()->attempt(array(
            'login'=>$request->login,
            'password'=>$request->password,
        ))){
                return redirect()->route('index');
        }
        return redirect()->route('index');
    }
}
