<?php

use Illuminate\Support\Facades\Route;
// use App\Events\HelloEvent;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/send-event', function(){
    // broadcast(HelloEvent());
    $text = 'This is from pri event';
    broadcast(new \App\Events\HelloEvent($text));
});

Route::get('/user', function(){
    return view('user');
});
