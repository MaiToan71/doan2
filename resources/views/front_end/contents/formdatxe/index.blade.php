@extends('front_end.layouts.layout')
@section('body')
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/16.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate pb-5">
          	    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Cars <i class="ion-ios-arrow-forward"></i></span></p>
                <h3 class="mb-3 bread" style="color:white;">Điền thông tin đặt trước xe</h3>
            </div>
        </div>
    </div>
</section>
<section>
<div class="container">
<form>
@csrf 
  <div class="row">
    <div class="col-sm">
    <div class="form-group">
        <label for="exampleFormControlInput1">Thời gian hẹn đến làm hợp đồng:</label>
        <input type="datetime-local" class="form-control"  >
    </div>    
    </div>
    <div class="col-sm">   
    </div>
  </div>
  <hr/>
  <div class="row">
    <div class="col-sm">
    <div class="form-group">
        <label for="exampleFormControlInput1">Ngày bắt đầu:</label>
        <input type="datetime-local" class="form-control"  >
    </div>  
    <div class="form-group">
        <button type="submit" class="btn btn-success" style="height:50px;width:140px;">Đặt xe</button>
    </div>  
    </div>
    <div class="col-sm"> 
    <div class="form-group">
        <label for="exampleFormControlInput1">Ngày kết thúc:</label>
        <input type="datetime-local" class="form-control"  >
    </div>   
   
    </div>
  </div>
 
</form>
</div>
   
  
<section>
@endsection