<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;



class UserController extends Controller
{
    //Обновить аватарку
    public function updateAvatar(Request $request){
        $user = User::find(Auth::user()->id);
        $default_avatar = "person-circle.svg";
        $old_avatar = Auth::user()->avatar;
        
        $new_img = $_FILES['img_avatar']['name'];
        if(!empty($_FILES)){
            move_uploaded_file($_FILES['img_avatar']['tmp_name'],
                                "images/user-avatar/".$_FILES['img_avatar']['name']);
            if($default_avatar != $old_avatar){
                unlink("images/user-avatar/".$old_avatar);
            }
        }
        $user->avatar = $new_img;
        $user->save();
        
        return redirect()->back();
    }
    //удалить аватарку
    public function deleteAvatar(Request $request){
        $old_avatar = Auth::user()->avatar;
        unlink("images/user-avatar/".$old_avatar);
        DB::table('users')
                            ->where('id','=',Auth::user()->id)
                            ->update(['avatar'=> 'person-circle.svg']);
        return redirect()->back();
    }
    //удалить аккаунт
    public function deleteProfile(){
        $user = User::find(Auth::user()->id);
        Auth::logout();
        $user->delete();

      return redirect()->route('login');

    }
    //изменить пароль
    public function editPassword(Request $request){
        if(Hash::check($request->password, Auth::user()->password )){
            $request->validate([
                'password_new' => ['required', 'string', 'min:6, confirmed'],
                'password_confirmation' => ['required', 'string', 'min:6'],
            ]);
            $user = User::find(Auth::user()->id);
            $user->update(['password' => Hash::make($request->password_new)]);
            $user->save();
            return redirect()->back()->with('msg', 'чтото получилось');
        }
        else {
            return redirect()->withErrors('Пароль неверен');

        }
       
        
       
    }
}