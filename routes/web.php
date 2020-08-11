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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/he-thong', 'HethongController@index')->name('hethong');

Route::group(['prefix'=>'QuanLyLoaiXe','as' => 'QuanLyLoaiXe.' ],function(){
    //lấy dữ liệu
    Route::get('/quan-ly-loai-xe','QuanlyloaixeController@index')->name('index');
});
