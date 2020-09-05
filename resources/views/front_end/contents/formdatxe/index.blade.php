@extends('front_end.layouts.layout')
@section('body')
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/16.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate pb-5">
          	    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Trang chủ <i class="ion-ios-arrow-forward"></i></a></span> <span>Danh sách xe <i class="ion-ios-arrow-forward"></i></span></p>
                <h3 class="mb-3 bread" style="color:white;">Điền thông tin đặt trước xe</h3>
            </div>
        </div>
    </div>
</section>
<section>
<div class="container">
@if(session()->has('success'))
<div class="alert alert-primary" role="alert">
  Bạn đã đặt xe thành công
</div>
@endif
@if(session()->has('fail'))
<div class="alert alert-danger mt-2" role="alert">
  Bạn đặt xe thất bại
</div>
@endif
@if($count=='0')
<h4><span style="color:red">Chú ý</span>: chưa có ai đặt trước, bạn là người đầu</h4>
@else
<h4><span style="color:red">Chú ý</span>: Xe bạn chọn đã có khách đặt đến <span style="color:red">{{$format}}</span>, bạn có thể đặt ở 5 ngày kế tiếp </h4>
@endif
<form method="post" id="datxe" onsubmit="return kt()" name="myForm">
@csrf 
  <div class="row mt-3">
    <div class="col-sm">
    <input type="text" name="khachhang_id" hidden value="{{ session('khachhang_id')}}">
    <div class="form-group">
        <label style="color:black; font-size:20px">Thời gian hẹn đến làm hợp đồng:</label>
        <input type="datetime-local" class="form-control" name="ThoiGianDatTruoc" id="ThoiGianDatTruoc" >
    </div>    
    </div>
    <div class="col-sm">   
    </div>
  </div>
  <hr/>
  <h3 style="color:Gray"> Dự kiến ngày thuê </h3>
  <hr/>
  <div class="row">
    <div class="col-sm">
    <div class="form-group">
        <label style="color:black; font-size:20px">Ngày bắt đầu:</label>
        <input type="datetime-local" class="form-control" name="ThoiGianNhanXe" id="ThoiGianNhanXe">
    </div>  
    <div class="form-group">
        <button type="submit" class="btn btn-success" style="height:50px;width:140px;">Đặt xe</button>
    
    </div>  
    </div>
    <div class="col-sm"> 
    <div class="form-group">
        <label style="color:black; font-size:20px">Ngày kết thúc:</label>
        <input type="datetime-local" class="form-control" name="ThoiGianTraXe"  id="ThoiGianTraXe">
    </div>     
    </div>
  </div>
</form>

</div>
<section>
<script>


$("#datxe").validate({
		onfocusout: false,
		onkeyup: false,
		onclick: false,
		rules: {
			"ThoiGianDatTruoc": {
				required: true				
            },          
            "ThoiGianNhanXe": {
				required: true				
            },
            "ThoiGianTraXe": {
                required: true,
            },           	
		},
        messages: {
			"ThoiGianDatTruoc": {
				required: "Bạn chưa nhập thời gian đến hẹn hợp đồng"			
            },            
            "ThoiGianNhanXe": {
				required: "Bạn chưa chọn ngày bắt đầu"				
            },
            "ThoiGianTraXe": {
                required: "Bạn chưa chọn ngày kết thúc "
            }
            
        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
        error.addClass('invalid-feedback');
        element.closest('.form-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
        $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
        }
});
function kt(){
    var ThoiGianDatTruoc = new Date(document.forms["myForm"]["ThoiGianDatTruoc"].value);
    var ThoiGianNhanXe =new Date( document.forms["myForm"]["ThoiGianNhanXe"].value )
    var ThoiGianTraXe =  new Date( document.forms["myForm"]["ThoiGianTraXe"].value);
      
    var dateNow = new Date(); 
    var date = new Date ('08:00:00');
    if(ThoiGianDatTruoc < dateNow || ThoiGianNhanXe <  dateNow || ThoiGianTraXe < dateNow){
        alert("Bạn phải chọn ngày lớn hơn hôm nay ");   
        alert(ThoiGianDatTruoc-date);
        return false;
    }
    if(ThoiGianDatTruoc  > ThoiGianNhanXe || ThoiGianDatTruoc > ThoiGianTraXe){
        alert("Thời gian hẹn làm hợp đồng phải nhỏ hơn thời gian dự kiến thuê ");   
        return false;
    }
    if(ThoiGianNhanXe  > ThoiGianTraXe ){
        alert("Thời gian nhận xe phải nhỏ hơn thời thoi gian tra xe");   
        return false;
    }
    
    if( ThoiGianDatTruoc  - dateNow <  86400000)
    {
        alert("Bạn hãy đặt lịch hẹn sang hôm tới");   
        return false;
    }
    
}
</script>
@endsection