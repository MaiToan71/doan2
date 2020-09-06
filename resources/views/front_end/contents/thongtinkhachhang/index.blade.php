@extends('front_end.layouts.layout')
@section('body')
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{ URL::to('/') }}/imgs/image_1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate pb-5">
          	    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Trang chủ <i class="ion-ios-arrow-forward"></i></a></span> <span>Hồ sơ <i class="ion-ios-arrow-forward"></i></span></p>
                <h3 class="mb-3 bread" style="color:white;">Hồ sơ của bạn</h3>
            </div>
        </div>
    </div>
</section>
<form method = "post" id ="myform" enctype="multipart/form-data">
    @csrf 
    @foreach($thongtin as $elm)
<section class="mt-3">
<div class="container">
<div class="card">
  <div class="card-body">
 
  <div class="row">
    <div class="col-sm">
   
   
        <input type="text" hidden name="khachhang_id" value="{{session ('khachhang_id')}}">
            <div class="form-group">
                <label >Họ và tên:</label>
                <input type="text" class="form-control" name="Ten" value="{{$elm->Ten}}"  >
            </div> 
        
            <div class="form-group">
                <label >Số điện thoại:</label>
                <input type="text" class="form-control" name="SoDienThoai" value="{{$elm->SoDienThoai}}" >
            </div>
            <div class="form-group">
                <label >Ngày sinh:</label>
                <input type="date" class="form-control"  name="NgaySinh" value="{{$elm->NgaySinh}}" >
            </div>
            <div class="form-group">
                <label >Giấy phép lái xe:</label>
                <input type="file" class="form-control-file"  name="GiayPhepLaiXe"/>
                <br>
                <img src="{{ URL::to('/') }}/imgs/{{ $elm->GiayPhepLaiXe }}"   alt="giấy phép lái xe" width="500" height="500">
            </div>
            <div class="form-group">
                <label >CMND:</label>
                <input type="file" class="form-control-file"  name="CMND"/>
                <br>
                <img src="{{ URL::to('/') }}/imgs/{{ $elm->CMND }}"  alt="CMND" width="500" height="500">
            </div>    
            <div class="form-group">
            <button type="submit" class="btn btn-primary">Ghi lại</button>
            </div>    
        </div>
        <div class="col-sm">   
            <div class="form-group">
                <label >Email:</label>
                <input type="text" name="Email" class="form-control" value="{{$elm->Email}}"  >
            </div>   
            <div class="form-group">
                <label >Mật khẩu:</label>
                <input type="password" name="MatKhau" class="form-control"  value="{{$elm->MatKhau}}"  >
            </div>
            <div class="form-group">
                <label >Địa chỉ:</label>
                <input type="text" name="DiaChi" class="form-control"  value="{{$elm->DiaChi}}" >
            </div>
            <div class="form-group">
                <label >Hộ khẩu:</label>
                <input type="file" class="form-control-file"  name="HoKhau"/>
                <br>
                <img src="{{ URL::to('/') }}/imgs/{{ $elm->HoKhau }}"   alt="Hộ khẩu" width="500" height="500">
            </div>
           
        </div>
      
  </div>
  </div>
</div>
</div>
   
  
</section>
@endforeach
    </form>
<section class="mt-5">
<div class="container">
<div class="card">
  <div class="card-body">
    This is some text within a card body.
  </div>
</div>
</div>
</section>
@endsection