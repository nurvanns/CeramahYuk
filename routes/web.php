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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
	return view('awal');
});
Route::get('tutorial', function () {
	return view('tutorial');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin/login', 'Auth\AdminAuthController@getLogin')->name('admin.login');
Route::post('admin/login', 'Auth\AdminAuthController@postLogin');

Route::middleware('auth:admin')->group(function(){
    // Tulis routemu di sini.    
  });

//Ceramah
Route::get('/dataceramah','DataCeramahController@index');
Route::get('/dataceramah/tambah','DataCeramahController@tambah');
Route::post('/dataceramah/store','DataCeramahController@store');
Route::get('/dataceramah/edit/{id}','DataCeramahController@edit');
Route::post('/dataceramah/update','DataCeramahController@update');
Route::get('/dataceramah/hapus/{id}','DataCeramahController@hapus');


//Penceramah
Route::get('/datapenceramah','PenceramahController@index');
Route::get('/datapenceramah/tambah','PenceramahController@tambah');
Route::post('/datapenceramah/store','PenceramahController@store');
Route::get('/datapenceramah/edit/{id}','PenceramahController@edit');
Route::post('/datapenceramah/update','PenceramahController@update');
Route::get('/datapenceramah/hapus/{id}','PenceramahController@hapus');