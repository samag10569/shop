<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create Sitething great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index');
});

Route::get('/index',['as'=>'index','uses'=>'SiteController@index']);
Route::get('/login',['as'=>'tem.login','uses'=>'SiteController@login']);
// Route::get('/register',['as'=>'tem.register','uses'=>'HomeController@register']);
Route::get('/register',['as'=>'auth.register','uses'=>'SiteController@register']);

Route::get('/category',['as'=>'tem.category','uses'=>'SiteController@category']);
Route::get('/details',['as'=>'tem.details','uses'=>'SiteController@details']);
Route::get('/checkout',['as'=>'tem.checkout','uses'=>'SiteController@checkout']);
Route::get('/cart',['as'=>'tem.cart','uses'=>'SiteController@cart']);
Route::get('/confirmation',['as'=>'tem.confirmation','uses'=>'SiteController@confirmation']);
Route::get('/tracking',['as'=>'tem.tracking','uses'=>'SiteController@tracking']);
Route::get('/contact',['as'=>'tem.contact','uses'=>'SiteController@contact']);









Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
