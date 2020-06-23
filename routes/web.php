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

Auth::routes();

/*
Route::name('home')->get('/', 'Each\HomeController@index');
Route::name('product')->get('/product', 'Each\ProductController@index');
Route::name('cart')->get('/cart', 'Each\CartController@index');
*/

/*
|--------------------------------------------------------------------------
| Frontend
|--------------------------------------------------------------------------|
*/
// Home
Route::prefix('')->namespace('Front')->group(function () {
    Route::name('home')->get('/', 'ShopController@index');
    Route::name('product')->get('/product/{id}', 'ShopController@product');
	Route::middleware('auth')->name('cart')->get('/cart', 'ShopController@cart');
	Route::middleware('auth')->name('tocart')->post('/tocart', 'ShopController@tocart');
	Route::middleware('auth')->name('clearall')->post('/clearall', 'ShopController@clearall');
	Route::middleware('auth')->name('clearone')->post('/clearone', 'ShopController@clearone');
	Route::name('mailer')->post('/mailer', 'ShopController@mailer');
	Route::name('register')->get('/register', 'ShopController@register');
});
/*
|--------------------------------------------------------------------------
| Backend
|--------------------------------------------------------------------------|
*/
Route::prefix('')->middleware('admin')->namespace('Back')->group(function () {
    Route::name('dashboard')->get('/dashboard', 'AdminController@index');
    Route::resource('products', 'AdminController');
    Route::name('upload')->post('/products/create', 'AdminController@upload'); //!!!upload 


});