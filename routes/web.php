<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/addbook', function (){
    return view('addbook');
});

Route::get('users/{id}', function ($id) {
    echo "Bem Vindo $id";
});


Route::post('/requisicao', function (Request $request) {
    return "Hello Post";
});

Route::prefix('application')->group(function () {
    Route::get('/', function () {
        return view('home');
    })->name('home');
    
    Route::get('/user', function () {
        return view('usuarios');
    })->name('app.user');

    Route::get('/form', function () {
        return view('formulario');
    })->name('app.form');
});

Route::redirect('todoslivros', 'application', 301);

Route::get('todosusuarios', function () {
    return redirect()->route('home');
});