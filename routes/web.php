<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;

use Illuminate\Support\Collection;

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

Route::any('/', function () {
    return view('home');
});
Route::any('/play', function () {
    return view('play');
});

Route::any('/view', function () {    
    return view('view');
});
Route::any('/view1', function () {    
    return view('view1');
});

Route::any('/list', function () {    
    return view('list');
});
Route::any('/test', function () {    
    return view('test');
});

Route::any('/delete', function () {    
    return view('delete');
});

Route::get('/edit/', function (Request $request) {
    $url = $request->input('do');
    return view('edit',['url' => $url]);
});


Route::get('add', [PostController::class, 'ajaxValidation'])->name('ajax.validation');
Route::post('add', [PostController::class, 'ajaxValidationStore'])->name('ajax.validation.store');
Route::post('users', [PostController::class, 'usersget']);
Route::post('delete_users', [PostController::class, 'usersdelete']);

Route::get('/register', [RegisterController::class, 'create'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('registerPost');


Route::get('/login', [LoginController::class, 'create'])->name('register');
Route::post('/login', [LoginController::class, 'login'])->name('loginAuth');

Route::get('/logout', [LogoutController::class, 'logout'])->name('register');


Route::post('edit', [PostController::class, 'ajaxValidationUpdate'])->name('ajax.validation.update');

Route::get('ajax/validation', [PostController::class, 'ajaxValidation'])->name('ajax.validation');
Route::post('ajax/validation/store', [PostController::class, 'ajaxValidationStore'])->name('ajax.validation.store');


Route::any('/profile', function (Request $request) {
    $url = $request->input('do');
    return view('profile',['url' => $url]);
});

