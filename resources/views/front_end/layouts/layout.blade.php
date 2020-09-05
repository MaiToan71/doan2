
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Carbook</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{URL::asset('frontend/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('frontend/css/animate.css')}}">
    
    <link rel="stylesheet" href="{{URL::asset('frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('frontend/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('frontend/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{URL::asset('frontend/css/aos.css')}}">

    <link rel="stylesheet" href="{{URL::asset('frontend/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{URL::asset('frontend/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{URL::asset('frontend/css/jquery.timepicker.css')}}">
    <script src="{{URL::asset('frontend/js/jquery.min.js')}}"></script>
    <script src="{{URL::asset('plugins/jquery-validation/jquery.validate.min.js')}}"></script>
    <link rel="stylesheet" href="{{URL::asset('frontend/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{URL::asset('frontend/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{URL::asset('frontend/css/style.css')}}">
    <style>
	body{
		font-family: times;
	}
</style>
  </head>
  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="{{route('index')}}" style="font-family: times">Đặt<span>Xe-sup</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu" style="font-family: times"></span> Danh sách
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item "><a href="{{route('index')}}" class="nav-link">Trang chủ</a></li>
	   	        
	          <li class="nav-item"><a href="{{route('Giaodien.Xes')}}" class="nav-link">Danh sách xe</a></li>	   
            @if(Session::has('Email'))
            <div class="btn-group">
                <a href ="# "class="nav-link   dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-top:5%;color:white">
                  Hồ sơ cá nhân
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                <li class="nav-item"><a href="{{route('Giaodien.ThongTinCaNhan')}}" class="nav-link" style="color:black">Hồ sơ </a></li>
                <li class="nav-item"><a href="{{route('Giaodien.LichSu')}}" class="nav-link" style="color:black">Lịch sửa đặt xe</a></li>
                 
                </div>
              </div>      

            @endif
            <li class="nav-item"><a href="{{route('DangNhap')}}" class="nav-link">Đăng nhập</a></li>
            <li class="nav-item"><a href="{{route('logout')}}" class="nav-link">Đăng xuất</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
 
	@yield('body')

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2"><a href="#" class="logo">Đặt<span>Xe-SUP</span></a></h2>
              <p>Đi khắp muôn nơi.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Thông Tin</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Về Chúng Tôi</a></li>
                <li><a href="#" class="py-2 d-block">Dịch Vụ</a></li>
                <li><a href="#" class="py-2 d-block">Điều Khoản Và Điều Kiện</a></li>
                <li><a href="#" class="py-2 d-block">Đảm Bảo Về Giá Tốt Nhất</a></li>
                <li><a href="#" class="py-2 d-block">Quyền riêng tư &amp; Chính sách bảo mật</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Hỗ Trợ Khách Hàng</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">FAQ</a></li>
                <li><a href="#" class="py-2 d-block">Các Phương Thức Thanh Toán</a></li>
                <li><a href="#" class="py-2 d-block">Hướng Dẫn Đặt Xe</a></li>
                <li><a href="#" class="py-2 d-block">How it works</a></li>
                <li><a href="#" class="py-2 d-block">Liên Lạc Với Chúng Tôi</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Đặt câu hỏi cho chúng tôi </h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">A17 Tạ Quang Bửu</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+024 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


 
  <script src="{{URL::asset('frontend/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{URL::asset('frontend/js/popper.min.js')}}"></script>
  <script src="{{URL::asset('frontend/js/bootstrap.min.js')}}"></script>
  <script src="{{URL::asset('frontend/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{URL::asset('frontend/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{URL::asset('frontend/js/jquery.stellar.min.js')}}"></script>
  <script src="{{URL::asset('frontend/js/owl.carousel.min.js')}}"></script>
  <script src="{{URL::asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{URL::asset('frontend/js/aos.js')}}"></script>
  <script src="{{URL::asset('frontend/js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{URL::asset('frontend/js/bootstrap-datepicker.js')}}"></script>
  <script src="{{URL::asset('frontend/js/jquery.timepicker.min.js')}}"></script>
  <script src="{{URL::asset('frontend/js/scrollax.min.js')}}"></script>
  
  <script src="{{URL::asset('frontend/js/google-map.js')}}"></script>
  <script src="{{URL::asset('frontend/js/main.js')}}"></script>
    
  </body>
</html>