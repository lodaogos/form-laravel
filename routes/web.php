<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return redirect('/form');
});

Route::get('/form', 'App\Http\Controllers\FormController@index');

Route::post('/form', 'App\Http\Controllers\FormController@show');

Route::get('/result', 'App\Http\Controllers\FormController@result');