@extends('front_end.layouts.layout')
@section('body')
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/16.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate pb-5">
          	    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Trang chủ <i class="ion-ios-arrow-forward"></i></a></span> <span>Lịch sử <i class="ion-ios-arrow-forward"></i></span></p>
                <h3 class="mb-3 bread" style="color:white;">Lịch sử đặt xe</h3>
            </div>
        </div>
    </div>
</section>
<section>
@foreach($thongtin as $elm)
<div class="container mt-3">
<div class="card">
  <div class="card-body">
    <div class="row">
        <div class="col-sm">
            <p>{{$elm -> hopdong_id}}</p>
        </div>
        <div class="col-sm">
            <p>{{$elm -> khachhang_id}}</p>
        </div>
        <div class="col-sm">
             <p>{{$elm -> loivipham_id}}</p>
        </div>
    </div>
  </div>
</div>
</div>
@endforeach
</section>
@endsection