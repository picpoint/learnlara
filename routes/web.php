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

Route::get('/', function () {
    $rs = 2 + 3;
    $nm = "Igor";
    $bg = '#rgb';
    $clr = 'green';
    return view('index', compact('rs', 'nm', 'bg', 'clr'));
});


Route::get('/welcome', function() {
   return view('welcome');
});


//Route::post('/send-email', function() {
//    if (!empty($_POST)) {
//        dd($_POST);
//    }
//    return 'Send-email';
//});


//Route::match(['get', 'post'], '/contact', function() {
//    dump($_POST);
//    return view('contact');
//});
//
//
//Route::redirect('/contact', '/welcome');
