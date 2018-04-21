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
    return view('welcome');
});


//Route::get('todo',function(){
//    $data['todos'] = array('Pergi Sekolah','Kerjakan PR','Tidur Malam');
//    return view ('todo',$data);
//});
//Route::get('makanan','MakananController@index');

Route::get('todo','TodoController@index');
Route::get('todo/create','TodoController@create');
Route::post('todo','TodoController@store');
Route::get('category','CategoryController@index');

Route::get('category/create','CategoryController@create');
Route::post('category','CategoryController@store');

Route::get('user/create','UserController@create');
Route::get('user','UserController@index');
Route::post('user','UserController@store');

