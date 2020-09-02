@extends('front_end.layouts.layout')
@section('body')
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/16.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate pb-5">
          	    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Cars <i class="ion-ios-arrow-forward"></i></span></p>
                <h3 class="mb-3 bread" style="color:white;">Hồ sơ của bạn</h3>
            </div>
        </div>
    </div>
</section>
<section class="mt-3">
<div class="container">
<div class="card">
  <div class="card-body">
  <div class="row">
    <div class="col-sm">
    <form>
    @csrf 
    <input type="text" hidden name="khachhang_id" value="{{session ('khachhang_id')}}">
        <div class="form-group">
            <label for="exampleFormControlInput1">Họ và tên:</label>
            <input type="text" class="form-control"  >
        </div> 
     
        <div class="form-group">
            <label for="exampleFormControlInput1">Số điện thoại:</label>
            <input type="text" class="form-control"  >
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Ngày sinh:</label>
            <input type="datetime" class="form-control"  >
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Giấy phép lái xe:</label>
            <img src="" alt="giấy phép lái xe" width="500" height="500">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">CMND:</label>
            <img src="" alt="CMND" width="500" height="500">
        </div>
       
    </form>
    </div>
    <div class="col-sm">   
        <div class="form-group">
            <label for="exampleFormControlInput1">Email:</label>
            <input type="text" class="form-control"  >
        </div>   
        <div class="form-group">
            <label for="exampleFormControlInput1">Mật khẩu:</label>
            <input type="password" class="form-control"  >
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Địa chỉ:</label>
            <input type="text" class="form-control"  >
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Hộ khẩu:</label>
            <img src="" alt="Hộ khẩu" width="500" height="500">
        </div>
        <div class="form-group">
        <button type="submit" class="btn btn-primary">Ghi lại</button>
        </div>
    </div>
  </div>
  </div>
</div>
</div>
   
  
</section>
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