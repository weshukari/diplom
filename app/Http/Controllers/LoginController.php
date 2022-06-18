<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function login(Request $request){
        $input = $request->all();
        $remember = $request->has('remember')?true:false;
    
        $this->validate($request,[
            'login'=> 'required',
            'password'=>'required',
        ]);
        if(auth()->attempt(array(
            'login'=>$input['login'],
            'password'=>$input['password'], 
        ), $remember)){
                return redirect()->route('index');
        }
        else {
            return redirect()->back()->withErrors(['msg'=>'Логин или пароль неверны']);
        }
    }
}
