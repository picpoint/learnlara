<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', 'HomeController@index');
Route::get('/page/{slug}', 'PageController@show');
Route::get('/test', 'Admin\AdmController@tst');


Route::resource('/posts', 'PostController');



Route::fallback(function() {
    abort(404, "Page not found ... ");
});












