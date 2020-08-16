
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Carbook - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">   
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">   
    <link rel="stylesheet" href="{{URL::asset('front-end/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('front-end/css/animate.css')}}">    
    <link rel="stylesheet" href="{{URL::asset('front-end/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('front-end/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('front-end/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{URL::asset('front-end/css/aos.css')}}">
    <link rel="stylesheet" href="{{URL::asset('front-end/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('front-end/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{URL::asset('front-end/css/jquery.timepicker.css')}}">    
    <link rel="stylesheet" href="{{URL::asset('front-end/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{URL::asset('front-end/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{URL::asset('front-end/css/style.css')}}">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Car<span>Book</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index.html" class="nav-link">Trang chủ</a></li>
	          <li class="nav-item"><a href="about.html" class="nav-link">Thông tin </a></li>	          
	          <li class="nav-item"><a href="pricing.html" class="nav-link">Định giá</a></li>
	          <li class="nav-item"><a href="{{route('frontend_xe.index')}}"  class="nav-link">Xe</a></li>	          
	          <li class="nav-item"><a href="contact.html" class="nav-link">Thong tin cá nhân</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
   
    <!-- END nav -->
    
    <div class="hero-wrap ftco-degree-bg" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
          <div class="col-lg-8 ftco-animate">
          	<div class="text w-100 text-center mb-md-5 pb-md-5">
	            <h1 class="mb-4">Fast &amp; Easy Way To Rent A Car</h1>
	            <p style="font-size: 18px;">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts</p>
	            <a href="https://vimeo.com/45830194" class="icon-wrap popup-vimeo d-flex align-items-center mt-4 justify-content-center">
	            	<div class="icon d-flex align-items-center justify-content-center">
	            		<span class="ion-ios-play"></span>
	            	</div>
	            	<div class="heading-title ml-5">
		            	<span>Easy steps for renting a car</span>
	            	</div>
	            </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <section class="ftco-section ftco-no-pt bg-light">
    	<div class="container">
    		<div class="row no-gutters">
    			<div class="col-md-12	featured-top">
    				<div class="row no-gutters">
	  					<div class="col-md-4 d-flex align-items-center">
	  						<form action="#" class="request-form ftco-animate bg-primary">
		          		<h2>Thực hiện chuyến đi </h2>
			    				<div class="form-group">
			    					<label for="" class="label">Địa điểm nhận xe</label>
			    					<input type="text" class="form-control" placeholder="Nội thành Hà Nội">
			    				</div>
			    				<div class="form-group">
			    					<label for="" class="label">Địa điểm dừng </label>
			    					<input type="text" class="form-control" placeholder="Hải Dương, Hải Phòng,..">
			    				</div>
			    				<div class="d-flex">
			    					<div class="form-group mr-2">
			                <label for="" class="label">Bắt đầu</label>
			                <input type="text" class="form-control" id="book_pick_date" placeholder="Ngày">
			              </div>
			              <div class="form-group ml-2">
			                <label for="" class="label">Kết thúc</label>
			                <input type="text" class="form-control" id="book_off_date" placeholder="Ngày">
			              </div>
		              </div>		             
			            <div class="form-group">
			              <input type="submit" value="Tìm kiếm" class="btn btn-secondary py-3 px-4">
			            </div>
			    			</form>
	  					</div>
	  					<div class="col-md-8 d-flex align-items-center">
	  						<div class="services-wrap rounded-right w-100">
	  							<h3 class="heading-section mb-4">Hướng dẫn chọn xe thuê tốt hơn</h3>
	  							<div class="row d-flex mb-4">
					          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
					            <div class="services w-100 text-center">
				              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-route"></span></div>
				              	<div class="text w-100">
					                <h3 class="heading mb-2">Chọn địa điểm nhận xe</h3>
				                </div>
					            </div>      
					          </div>
					          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
					            <div class="services w-100 text-center">
				              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-handshake"></span></div>
				              	<div class="text w-100">
					                <h3 class="heading mb-2">Chọn giao dịch</h3>
					              </div>
					            </div>      
					          </div>
					          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
					            <div class="services w-100 text-center">
				              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-rent"></span></div>
				              	<div class="text w-100">
					                <h3 class="heading mb-2">Đặt trước xe</h3>
					              </div>
					            </div>      
					          </div>
					        </div>
					        <p><a href="#" class="btn btn-primary py-3 px-4">Các bước thuê xe</a></p>
	  						</div>
	  					</div>
	  				</div>
				</div>
  		</div>
    </section>
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
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{URL::asset('front-end/js/jquery.min.js')}}"></script>
  <script src="{{URL::asset('front-end/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{URL::asset('front-end/js/popper.min.js')}}"></script>
  <script src="{{URL::asset('front-end/js/bootstrap.min.js')}}"></script>
  <script src="{{URL::asset('front-end/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{URL::asset('front-end/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{URL::asset('front-end/js/jquery.stellar.min.js')}}"></script>
  <script src="{{URL::asset('front-end/js/owl.carousel.min.js')}}"></script>
  <script src="{{URL::asset('front-end/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{URL::asset('front-end/js/aos.js')}}"></script>
  <script src="{{URL::asset('front-end/js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{URL::asset('front-end/js/bootstrap-datepicker.js')}}"></script>
  <script src="{{URL::asset('front-end/js/jquery.timepicker.min.js')}}"></script>
  <script src="{{URL::asset('front-end/js/scrollax.min.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{URL::asset('front-end/js/google-map.js')}}"></script>
  <script src="{{URL::asset('front-end/js/main.js')}}"></script>
    
  </body>
</html>