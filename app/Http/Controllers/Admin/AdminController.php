<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Link;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(){

        $user_count = DB::table('users')->count();
        return view('admin.home.index', compact('user_count'));
    }
    public function showUser(){
        $users = User::all();
        return view('admin.user.index', ['users'=> $users]);
    }
    
}
