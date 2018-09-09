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

Route::get('/', [
    'uses' => 'HomeController@index',
    'as' => 'indexHome'
]);

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

Route::get('/quote', [
    'uses' => 'QuoteController@index',
    'as' => 'indexQuote'
]);

Route::get('/quote/create',[
    'uses' => 'QuoteController@createIndex',
    'as' => 'createQuoteIndex'
]);

Route::post('/quote/create',[
    'uses' => 'QuoteController@createPost',
    'as' => 'createQuotePost'
]);