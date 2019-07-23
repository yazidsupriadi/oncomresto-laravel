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

Route::get('/','BerandaController@index');
Route::get('member/register','AuthController@register');
Route::post('member/store','AuthController@store')->name('home.register');;
Route::get('/product','BerandaController@product');
Route::get('/product/{slug}','BerandaController@productbycategory');
Route::get('/product/{id}/detail','BerandaController@detail');
Route::get('/desk','BerandaController@deskview');
Route::post('cart/add','CartController@addcart');
Route::get('cart','CartController@keranjang');
Route::post('cart/update','CartController@update');
Route::get('cart/delete/{id}','CartController@delete');
Route::get('cart/formulir','CartController@formulir');
Route::post('cart','CartController@transaction');
Route::get('cart/mytransaction','CartController@mytransaction');
Route::get('cart/order/{code}','CartController@order');
Route::get('cart/sukses','CartController@sukses');
Route::get('comment','CommentController@index');
Route::post('comment','CommentController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix'=>'admin','middleware' => ['auth','checkStatus:admin'] ],function(){
	Route::get('dashboard','HomeController@index');
	Route::get('/logout','HomeController@logout')->name('logout');

	/*

	Route::get('category','CategoryController@index');
	Route::post('category/create','CategoryController@create');*/
	Route::resource('category','CategoryController');
	Route::resource('product','ProductController');
	Route::get('product/status/{id}','ProductController@changestatus');
	Route::get('transaction','TransactionController@index')->name('transaction.index');
	Route::get('transaction/{code}/{status}','TransactionController@status');
	Route::get('transaction/{code}/detail/data','TransactionController@detail');
	Route::get('transaction/status/{id}','TransactionController@productstatuschange');
	Route::get('transaction/{code}/detail/data/cetakpdf','TransactionController@cetakpdf');
	Route::get('user','UserController@index');
	Route::get('user/status/{id}','UserController@changestatus');
	Route::get('user/add','UserController@adduser');
	Route::post('user/add/store','UserController@store');
	Route::get('user/edit/{id}','UserController@edit');
	Route::post('user/edit/update','UserController@update');
	Route::get('user/delete/{id}','UserController@delete');
	Route::get('desk','DeskController@index')->name('desk.index');
	Route::post('desk','DeskController@store');
	Route::get('desk/status/{id}','DeskController@changestatus');
	Route::get('desk/{id}/edit','DeskController@edit');
	Route::put('desk/{id}','DeskController@update');
	Route::delete('desk/{id}','DeskController@delete');
});