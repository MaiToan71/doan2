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

Route::get('/dang-ky','GiaoDienDangKyController@DangKy')->name('DangKy');
Route::post('/dang-ky','GiaoDienDangKyController@ThucHienDangKy')->name('ThucHienDangKy');
Route::get('/dang-nhap','GiaoDienDangKyController@DangNhap')->name('DangNhap');
Route::post('/dang-nhap','GiaoDienDangKyController@ThucHienDangNhap')->name('ThucHienDangNhap');
Route::get('/logout','GiaoDienDangKyController@logout')->name('logout');

Route::get('/giao-dien','GiaoDienController@index')->name('index');

Route::get('/tim-kiem-xe','GiaoDienController@TimKiemXe')->name('TimKiemXe');

Route::group(['prefix'=>'Giaodien','as' => 'Giaodien.' ],function(){
    Route::get('/tim-kiem','GiaoDienTimKiemController@TimKiem')->name('timkiem');

    Route::get('/danh-sach-xe','GiaoDienTimKiemController@DanhSachXe')->name('danhsachxe');
    
    Route::get('/danh-sach-thong-tin-xe','GiaoDienXeController@Xes')->name('Xes');

    Route::get('/thong-tin-xe-chi-tiet/{xe_id}','GiaoDienXeController@ThongTinChiTiet')->name('ThongTinChiTiet');
    
    Route::get('/thong-tin-ca-nhan','GiaoDienHoSoController@ThongTinCaNhan')->name('ThongTinCaNhan');
    Route::post('/thong-tin-ca-nhan','GiaoDienHoSoController@ThongTinCaNhanCuaBan')->name('ThongTinCaNhanCuaBan');
   
    Route::get('/form-dat-xe/{xe_id}','GiaoDienFormDatXeController@FormDatXe')->name('FormDatXe');
    Route::post('/form-dat-xe/{xe_id}','GiaoDienFormDatXeController@ThucHienDatXe')->name('ThucHienDatXe');

    Route::get('/lich-su-dat-xe','GiaoDienHoSoController@LichSu')->name('LichSu');

});


//login
Route::get('/login','LoginController@Login')->name('Login');
Route::post('/login','LoginController@PostLogin')->name('PostLogin');
Route::get('/dangxuat','LoginController@dangxuat')->name('dangxuat');
//back-end
Route::get('/Trang-chu', 'TrangChuController@TrangChu')->middleware('LoginMiddle')->name('TrangChu');
Route::get('/data', 'TrangChuController@data')->name('data');

Route::get('/he-thong', 'HethongController@index')->middleware('LoginMiddle')->name('hethong');
Route::group(['prefix'=>'Hethong','middleware'=>'LoginMiddle','as' => 'Hethong.' ],function(){
    //lấy dữ liệu
    Route::get('/quan-ly-admin','HethongController@index')->name('index');
    //thêm dữ liệu
    Route::get('/them-moi-admin','HethongController@themmoi')->name('themmoi');
    Route::post('/them-moi-admin','HethongController@Them')->name('Them');
    //sua admin
    Route::get('/thong-tin-admin/{admin_id}','HethongController@thongtinsua')->name('thongtinsua');
 //   Route::post('/sua-admin/{admin_id}','HethongController@sua')->name('sua');
    Route::get('/sua-admin','HethongController@ChinhSua')->name('ChinhSua');
    Route::post('/sua-admin','HethongController@ThucHienChinhSua')->name('ThucHienChinhSua');
    // xoa
    Route::get('/xoa/{admin_id}','HethongController@Xoa')->name('Xoa');
    //timkiem
    Route::get('/tim-kiem-admin','HethongController@TimKiem')->name('TimKiem');
});

Route::group(['prefix'=>'QuanLyLoaiXe','middleware'=>'LoginMiddle','as' => 'QuanLyLoaiXe.' ],function(){
    //lấy dữ liệu
    Route::get('/quan-ly-loai-xe','QuanlyloaixeController@index')->name('index');
    //thêm dữ liệu
    Route::post('/quan-ly-loai-xe','QuanlyloaixeController@Them')->name('Them');
    Route::get('/Xoa/{loaixe_id}','QuanlyloaixeController@Xoa')->name('Xoa');
    Route::get('/sua/{loaixe_id}','QuanlyloaixeController@Thongtinsua')->name('Thongtinsua');
    Route::post('/sua/{loaixe_id}','QuanlyloaixeController@Sua')->name('Sua');
    
});
Route::group(['prefix'=>'QuanLyHangXe','middleware'=>'LoginMiddle','as' => 'QuanLyHangXe.' ],function(){
    //lấy dữ liệu
    Route::get('/quan-ly-hang-xe','QuanLyHangXeController@index')->name('index');
    //thêm dữ liệu
  //  Route::post('/quan-ly-hang-xe','QuanlyhangxeController@Them')->name('Them');
    Route::post('/quan-ly-hang-xe','QuanlyHangXeController@Them')->name('Them');
    Route::get('/Xoa/{hangxe_id}','QuanlyHangXeController@Xoa')->name('Xoa');
    Route::get('/sua-hang-xe/{hangxe_id}','QuanlyHangXeController@Thongtinsua')->name('Thongtinsua');
    Route::post('/sua-hang-xe/{hangxe_id}','QuanlyHangXeController@Sua')->name('Sua');
    
});
Route::group(['prefix'=>'QuanLyXe','middleware'=>'LoginMiddle','as' => 'QuanLyXe.' ],function(){
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

Route::group(['prefix'=>'QuanLyKhachHang','middleware'=>'LoginMiddle','as' => 'QuanLyKhachHang.' ],function(){
    //lấy dữ liệu
    Route::get('/danh-sach-khach-hang','QuanLyKhachHangController@index')->name('index');
    //sửa dữ liệu  
    Route::get('/sua/{khachhang_id}','QuanLyKhachHangController@sua')->name('sua');
    Route::post('/sua/{khachhang_id}','QuanLyKhachHangController@ThucHienSua')->name('ThucHienSua');
    //xóa dữ liệu
    Route::get('/xoa/{khachhang_id}','QuanLyKhachHangController@xoa')->name('xoa');
    Route::get('/huykhoa/{khachhang_id}','QuanLyKhachHangController@HuyKhoa')->name('HuyKhoa');
    //tìm kiếm
    Route::get('/tim-kiem','QuanLyKhachHangController@TimKiem')->name('TimKiem');
    //hiển thị chi tiết
    Route::get('/chitiet/{khachhang_id}','QuanLyKhachHangController@chitiet')->name('chitiet');

});

// quan ly hop dong
Route::group(['prefix'=>'QuanLyHopDong','middleware'=>'LoginMiddle','as' => 'QuanLyHopDong.' ],function(){
    //lấy dữ liệu
    Route::get('/chi-tiet-hop-dong/{hopdong_id}','DanhSachHopDongController@ChiTiet')->name('ChiTiet');
    Route::get('/danh-sach-hop-dong','DanhSachHopDongController@index')->name('index');
    Route::get('/Tim-kiem','DanhSachHopDongController@TimKiem')->name('TimKiem');
    //sua hop dong 
    Route::get('/sua-hop-dong/{hopdong_id}','DanhSachHopDongController@thongtinsua')->name('thongtinsua');
    Route::post('/sua-hop-dong/{hopdong_id}','DanhSachHopDongController@thuchiensua')->name('thuchiensua');
    // duyet hop dong
    Route::get('/duyet-lan-1/{hopdong_id}','DanhSachHopDongController@DuyetLanMot')->name('DuyetLanMot');
    //hien thi duyet lan 1
    Route::get('/duyet-hop-dong-lan-1','DanhSachHopDongController@hienthilanmot')->name('hienthilanmot'); 
    Route::get('/quay-lai-doi{hopdong_id}','DanhSachHopDongController@QuayLaiDoi')->name('QuayLaiDoi');
    // hop dong done 
    Route::get('/hop-dong-xong','DanhSachHopDongController@hopdongxog')->name('hopdongxog');
    Route::get('/hop-dong-xong/{hopdong_id}','DanhSachHopDongController@ketthuc')->name('ketthuc');
    //hop dong co vi pham
    Route::get('/vi-pham/{hopdong_id}','DanhSachHopDongController@vipham')->name('vipham');
    // form them vi pham
    Route::get('/form-vi-pham/{hopdong_id}','DanhSachHopDongController@formvipham')->name('formvipham');
    Route::post('/form-vi-pham/{hopdong_id}','DanhSachHopDongController@ghiLaiViPham')->name('ghiLaiViPham');

    // route them moi hop dong
    Route::get('/them-hop-dong','DanhSachHopDongController@ThemHopDong')->name('ThemHopDong');
    Route::post('/them-hop-dong','DanhSachHopDongController@ThucHienThem')->name('ThucHienThem');

    Route::post('/them-hop-dong','DanhSachHopDongController@ThucHienThem')->name('ThucHienThem');

    Route::get('/xoa-hop-dong/{hopdong_id}','DanhSachHopDongController@Xoa')->name('Xoa');
 
});



