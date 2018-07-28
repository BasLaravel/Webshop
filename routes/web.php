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

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();
Route::resource('producten','productController');
Route::get('/producten/delete/{id}','ProductController@delete')->name('admin.producten.delete');
Route::resource('geschiedenis','GeschiedenisController');
Route::resource('users','UserController');

//producten/crypto
Route::get('producten/{producten}/crypto','CryptoController@index');

//cart
Route::get('cart','CartController@index');
Route::get('cart/add/{id}','CartController@voegtoe');
Route::get('cart/verwijder/{id}','CartController@verwijder');
Route::get('cart/aantal/{aantal}/{id}','Cartcontroller@update');

//admin
Route::prefix('admin')->group(function(){
Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('/','AdminController@index')->name('admin.dashboard');
Route::get('/producten','AdminController@toonproducten')->name('admin.producten');
Route::get('/producten/export','AdminController@exportproducten')->name('admin.producten.export');
Route::post('/logout','Auth\AdminLoginController@adminLogout')->name('admin.logout');
Route::get('/images/upload','AdminController@upload')->name('admin.images.upload');
Route::post('/images/upload','AdminController@upload')->name('admin.images.upload');
Route::get('/images/overzicht','AdminController@overzicht')->name('admin.images.overzicht');
Route::get('/images/export','AdminController@exportimages')->name('admin.images.export');
Route::get('/images/overzicht/delete/{name}','AdminController@deleteimage')->name('admin.images.overzicht.delete');
});

//Checkout
Route::get('/checkout','CheckoutController@index')->name('checkout.index');
Route::get('/checkout/save','CheckoutController@save')->name('checkout.save');

//logout als een user
Route::post('user/logout','Auth\LoginController@userLogout')->name('user.logout');



