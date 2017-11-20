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
    return view('home1');
});

Route::get('about', function () {
    return view('about');
});



Route::resource('shop', 'ProductController', ['only' => ['index', 'show']]);
Route::resource('cart', 'CartController', ['only' => ['index', 'store', 'update', 'destroy']]);






Auth::routes();

//Route::get('/home1', 'HomeController@index')->name('home1');
//Route::get('/shop', 'PagesController@shop')->name('shop');
//Route::get('/cart', 'PagesController@cart')->name('cart');


