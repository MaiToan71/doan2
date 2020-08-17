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
//font-end
Route::get('/giao-dien-khach-hang','FrontendController@index')->name('index');
Route::group(['prefix'=>'frontend_xe','as' => 'frontend_xe.' ],function(){
    Route::get('/fontend-xe','FrontendXeController@index')->name('index');
});

//back-end
Route::get('/he-thong', 'HethongController@index')->name('hethong');
Route::group(['prefix'=>'Hethong','as' => 'Hethong.' ],function(){
    //lấy dữ liệu
    Route::get('/quan-ly-admin','HethongController@index')->name('index');
    //thêm dữ liệu
    Route::get('/them-moi-admin','HethongController@themmoi')->name('themmoi');
    Route::post('/them-moi-admin','HethongController@Them')->name('Them');
});

Route::group(['prefix'=>'QuanLyLoaiXe','as' => 'QuanLyLoaiXe.' ],function(){
    //lấy dữ liệu
    Route::get('/quan-ly-loai-xe','QuanlyloaixeController@index')->name('index');
    //thêm dữ liệu
    Route::post('/quan-ly-loai-xe','QuanlyloaixeController@Them')->name('Them');
    Route::get('/Xoa/{loaixe_id}','QuanlyloaixeController@Xoa')->name('Xoa');
    Route::get('/sua/{loaixe_id}','QuanlyloaixeController@Thongtinsua')->name('Thongtinsua');
    Route::post('/sua/{loaixe_id}','QuanlyloaixeController@Sua')->name('Sua');
    
});
Route::group(['prefix'=>'QuanLyHangXe','as' => 'QuanLyHangXe.' ],function(){
    //lấy dữ liệu
    Route::get('/quan-ly-hang-xe','QuanLyHangXeController@index')->name('index');
    //thêm dữ liệu
  //  Route::post('/quan-ly-hang-xe','QuanlyhangxeController@Them')->name('Them');
    Route::post('/quan-ly-hang-xe','QuanlyHangXeController@Them')->name('Them');
    Route::get('/Xoa/{hangxe_id}','QuanlyHangXeController@Xoa')->name('Xoa');
    Route::get('/sua-hang-xe/{hangxe_id}','QuanlyHangXeController@Thongtinsua')->name('Thongtinsua');
    Route::post('/sua-hang-xe/{hangxe_id}','QuanlyHangXeController@Sua')->name('Sua');
    
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
    Route::get('/sua-hop-dong','DanhSachHopDongController@thongtinsua')->name('thongtinsua');
});



