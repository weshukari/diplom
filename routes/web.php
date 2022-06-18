<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\LinkController;
use App\Http\Controllers\Admin\WalletController;
use App\Http\Controllers\Admin\LibraryCategoryController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//вывод всех страниц
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/librar', [HomeController::class, 'library'])->name('library.index');
Route::get('/articles', [HomeController::class, 'articles'])->name('articles');
Route::get('/ege', [HomeController::class, 'ege'])->name('ege');
Route::get('/register', [HomeController::class, 'register'])->name('auth.register');
Route::get('/login', [HomeController::class, 'login'])->name('auth.login');
Route::get('/crib', [HomeController::class, 'crib'])->name('crib');
Route::get('/profile',[HomeController::class, 'profile'])->name('profile')->middleware('auth');

//регистрация и авторизация
Route::post('/register', [RegisterController::class, 'store'])->name('register');
Route::post('/login', [LoginController::class, 'login'])->name('login');
//выход
Route::get('/logout', [HomeController::class, 'logout'])->name('logout');
//на админ часть
Route::middleware(['auth', "role:'администратор'"])->prefix('admin')->group(function(){
    Route::get('/home',[HomeController::class, 'Adminindex'])->name('Adminindex');
    Route::get('/user', [AdminController::class, 'showUser'])->name('admin.user');
    Route::resource('book', BookController::class);
    Route::resource('categoryLibrary', LibraryCategoryController::class);
    Route::resource('link', LinkController::class);
    Route::resource('wallet', WalletController::class);
});
//-------------------------------------
//пользователь
//--------------------------------------
//обновить аватар
Route::post('/updateAvatar', [UserController::class, 'updateAvatar'])->name('updateAvatar');

//удалить аватар
Route::get('/deleteAvatar', [UserController::class, 'deleteAvatar'])->name('deleteAvatar');

//удалить профиль
Route::post('/deleteProfile', [UserController::class, 'deleteProfile'])->name('deleteProfile');
//поменять пароль
Route::post('/profile', [UserController::class, 'editPassword'])->name('edit.password');


//ошибка 404
Route::fallback(function(){
    abort(404, 'Not found');
});