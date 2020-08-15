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
    //thêm dữ liệu
    Route::post('/quan-ly-loai-xe','QuanlyloaixeController@Them')->name('Them');
    Route::get('/Xoa/{loaixe_id}','QuanlyloaixeController@Xoa')->name('Xoa');
    
});
Route::group(['prefix'=>'QuanLyHangXe','as' => 'QuanLyHangXe.' ],function(){
    //lấy dữ liệu
    Route::get('/quan-ly-hang-xe','QuanLyHangXeController@index')->name('index');
    //thêm dữ liệu
  //  Route::post('/quan-ly-hang-xe','QuanlyhangxeController@Them')->name('Them');
    Route::post('/quan-ly-hang-xe','QuanlyHangXeController@Them')->name('Them');
    Route::get('/Xoa/{hangxe_id}','QuanlyHangXeController@Xoa')->name('Xoa');
    
});
Route::group(['prefix'=>'QuanLyXe','as' => 'QuanLyXe.' ],function(){
    //lấy dữ liệu
    Route::get('/quan-ly-xe','QuanLyXeController@index')->name('index'); 
    //thêm dữ liệu
    Route::get('/them-moi-xe','QuanLyXeController@ThemMoi')->name('ThemMoi');
    Route::post('/them-moi-xe','QuanLyXeController@ThucHienThem')->name('ThucHienThem');
    Route::get('/Xoa/{xe_id}','QuanLyXeController@Xoa')->name('Xoa');
    Route::get('/Sua/{xe_id}','QuanLyXeController@Sua')->name('Sua');
    Route::post('/Sua/{xe_id}','QuanLyXeController@ThucHienSua')->name('ThucHienSua');
    Route::get('/tim-kiem-xe','QuanLyXeController@TimKiem')->name('TimKiem');
});

Route::group(['prefix'=>'QuanLyKhachHang','as' => 'QuanLyKhachHang.' ],function(){
    //lấy dữ liệu
    Route::get('/danh-sach-khach-hang','QuanLyKhachHangController@index')->name('index');
    //thêm dữ liệu  
});
Route::group(['prefix'=>'QuanLyHopDong','as' => 'QuanLyHopDong.' ],function(){
    //lấy dữ liệu
    Route::get('/danh-sach-hop-dong','DanhSachHopDongController@index')->name('index');
    //thêm dữ liệu  
});

