<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Wallet;
use App\Models\Library;
use App\Models\Link;
use App\Models\CategoryLibrary;
use Illuminate\Support\Facades\DB;



class HomeController extends Controller
{
    //Главная страница
    public function index(){
        $data_wallet = Wallet::all();
        $new_book = DB::table('libraries')
                    ->join('category_libraries', 'libraries.id_category', '=', 'category_libraries.id')
                    ->orderBy('created_at', 'desc')
                    ->limit(4)
                    ->select('libraries.*', 'category_libraries.name as name_category')
                    ->get();
        $links = Link::all();
        return view('index', ['data_wallet'=> $data_wallet, 'new_book'=> $new_book, 'links'=>$links]);
    } 
    //Библиотека
    public function library(Request $request){
        $cat_id = $request->id_category;
        $books = Library::orderBy('created_at', 'desc')->get();
        $category_name = 'Все категории';
        $sort = $request->sort;
        $msg_sort = 'сначала новые';
        if($sort != Null){
            if($cat_id ==0){
                $books = Library::orderBy('created_at', $sort)->get();

            }
            else {
                $books = Library::orderBy('created_at', $sort)->where('id_category', $cat_id )->get();
                $category_name = CategoryLibrary::select('name')->where('id', $cat_id)->get();

            }
            if($sort =='asc'){ $msg_sort ="сначала старые";}
        }
      
        $categories = CategoryLibrary::all();
        return view('library',[
            'books'=>$books,
            'category_name'=>$category_name,
            'cat_id'=>$cat_id,
            'categories'=>$categories,
            'msg_sort' =>$msg_sort,
        ]);
      
    }
    public function articles(){
        return view('articles');
    }
    public function crib(){
        return view('crib');
    }
    public function ege(){
        return view('ege');
    }
    public function register(){
        return view('auth.register');
    }
    public function login(){
        return view('auth.login');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('auth.login');
    }
    public function profile(){
        $default_avatar = "person-circle.svg";
       
        return view('user.profile', compact('default_avatar'));
    }
    //на админ часть
    public function Adminindex(){
        if(auth()->user()->role =='администратор'){
            return view('admin.home.index');
        }
        else {
            return redirect()->back();
        }
    }
}
