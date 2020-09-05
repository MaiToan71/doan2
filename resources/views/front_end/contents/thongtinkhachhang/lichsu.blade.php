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
<div class="container mt-3 mb-3">
<div class="card">
  <div class="card-body">
    <div class="row">  
        <div class="col-sm ml-5">
        <span >Tên xe: {{$elm -> TenXe}}</span>
        <br>
        <span>Hãng xe:</span> {{$elm -> TenHangXe}} ||
        <span>Số chỗ: {{$elm -> TenHangXe}} chỗ</span>
        <br>
        <span>Tổng tiền:</span> <span name="tien">{{number_format($elm -> TongTien)}} </span>đồng
        <br>
                @if($elm->Duyet == 1)                  
                      <span style="color:blue">Đang đợi duyệt</span>
                    @elseif($elm->Duyet == 2) 
                      <span style="color:#006600">Đã duyệt lần 1</span>
                    @elseif($elm->Duyet == 3) 
                      <span style="color:red">Hợp đồng có vi phạm</span>
                    @else
                      <span style="color:blue">Đã thành tiền</span>
                    @endif
       
        
        </div>
        <div class="col-sm mr-5">
        <span style="color:blue">Lịch hẹn:</span> <span>{{$elm -> ThoiGianDatTruoc}}</span>
        <br>
        <span style="color:blue">Bắt đầu :</span> <span>{{$elm -> ThoiGianNhanXe}}</span> ||
        <span style="color:blue">Kết thúc :</span> <span>{{$elm -> ThoiGianTraXe}}</span>
        </div>
    </div>
  </div>
</div>
</div>
@endforeach
</section>
<script>

var formatter = new Intl.NumberFormat('en-US', {
  style: 'currency',
  currency: 'VND',
});
var tien = document.getElementsByName("tien");
tien.forEach(element => console.log(element.value));
</script>
@endsection