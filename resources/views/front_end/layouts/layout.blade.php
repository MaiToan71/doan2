
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Carbook - Free Bootstrap 4 Template by Colorlib</title>
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

    
    <link rel="stylesheet" href="{{URL::asset('frontend/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{URL::asset('frontend/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{URL::asset('frontend/css/style.css')}}">
  </head>
  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Đặt<span>Xe</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Danh sách
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="{{route('index')}}" class="nav-link">Trang chủ</a></li>
	          <li class="nav-item"><a href="about.html" class="nav-link">Giới thiệu</a></li>	        
	          <li class="nav-item"><a href="{{route('Giaodien.Xes')}}" class="nav-link">Danh sách xe</a></li>	         
	          <li class="nav-item"><a href="contact.html" class="nav-link">Hồ sơ cá nhân</a></li>
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
              <h2 class="ftco-heading-2"><a href="#" class="logo">Car<span>book</span></a></h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Information</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">About</a></li>
                <li><a href="#" class="py-2 d-block">Services</a></li>
                <li><a href="#" class="py-2 d-block">Term and Conditions</a></li>
                <li><a href="#" class="py-2 d-block">Best Price Guarantee</a></li>
                <li><a href="#" class="py-2 d-block">Privacy &amp; Cookies Policy</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Customer Support</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">FAQ</a></li>
                <li><a href="#" class="py-2 d-block">Payment Option</a></li>
                <li><a href="#" class="py-2 d-block">Booking Tips</a></li>
                <li><a href="#" class="py-2 d-block">How it works</a></li>
                <li><a href="#" class="py-2 d-block">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
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


  <script src="{{URL::asset('frontend/js/jquery.min.js')}}"></script>
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