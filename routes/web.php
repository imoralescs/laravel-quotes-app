<?php

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

    $title = 'Hello Laravel from Docker';
    $user = 'Israel Morales';
    return view('welcome', [
        'title' => $title,
        'user' => $user
    ]);
});

Route::get('/home', function () {

    $users = array(
        'John Casada',
        'Peter Parker',
        'Lynda Strange'
    );

    return view('home',[
        'users' => $users
    ]);
});