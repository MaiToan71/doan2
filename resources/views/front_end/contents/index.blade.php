@extends('front_end.layouts.layout')
@section('body')
<style>
	body{
		font-family: times;
	}
</style>
<body>

<div class="hero-wrap ftco-degree-bg" style="background-image: url('{{ URL::to('/') }}/imgs/Bugatti.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
          <div class="col-lg-8 ftco-animate">
          	<div class="text w-100 text-center mb-md-5 pb-md-5">
	            <h1 class="mb-4">Nhanh &amp; Dễ dàng đặt thuê xe </h1>
	            <p style="font-size: 18px;">Chúng tôi có giúp bạn đặt xe nhanh chóng để thực hiện các chuyến đi</p>
	            <a href="https://vimeo.com/45830194" class="icon-wrap popup-vimeo d-flex align-items-center mt-4 justify-content-center">
	            	<div class="icon d-flex align-items-center justify-content-center">
	            		<span class="ion-ios-play"></span>
	            	</div>
	            	<div class="heading-title ml-5">
		            	<span>Dễ Dàng Đặt Xe</span>
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
    				<div class="row no-gutters" style="height:100% ">
	  					<div class="col-md-4 d-flex align-items-center" >
	  						<form  action="{{route('TimKiemXe')}}" method="get"   style="height:100%; width:100%" class="request-form ftco-animate bg-primary">
							  @csrf 
								<h2>Tìm xe</h2>				
										<div class="form-group">
											<label for="" class="label">Tên xe</label>
											<input type="text" class="form-control" name="tenxe">
										</div>
								<div class="d-flex">
									<div class="form-group mr-2"  >
										<label for="" class="label">Hãng xe</label>
										
										<select class="form-control" name="loaixe">
											<option  value="">Chọn .......</option>
											@foreach($list_hang_xe as $hang_xe)                                  
												<option value="{{$hang_xe->hangxe_id}}" style="color:black">{{$hang_xe->TenHangXe}}</option>
											@endforeach
										</select>
									</div>
									<div class="form-group ml-2">
										<label for="" class="label">Số chỗ</label>
										
										<select class="form-control" name="hangxe">
											<option  value="">Chọn ...</option>
											@foreach($list_loai_xe as $loai_xe)  
												<option value="{{$loai_xe->loaixe_id}}"  style="color:black">{{$loai_xe->SoCho}} chỗ</option>
											@endforeach
										</select>
									</div>
								</div>             
								<div class="form-group">
								<input type="submit" value="Đặt xe" class="btn btn-secondary py-3 px-4">
								</div>
			    			</form>
	  					</div>
	  					<div class="col-md-8 d-flex align-items-center">
	  						<div class="services-wrap rounded-right w-100">
	  							<h3 class="heading-section mb-4">Cách Tốt Nhất Để Thuê Xe Hoàn Hảo</h3>
	  							<div class="row d-flex mb-4">
					          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
					            <div class="services w-100 text-center">
				              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-route"></span></div>
				              	<div class="text w-100">
					                <h3 class="heading mb-2">Chọn Vị Trí Bạn Muốn Đặt Xe</h3>
				                </div>
					            </div>      
					          </div>
					          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
					            <div class="services w-100 text-center">
				              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-handshake"></span></div>
				              	<div class="text w-100">
					                <h3 class="heading mb-2">Chọn Giá Tốt Nhất</h3>
					              </div>
					            </div>      
					          </div>
					          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
					            <div class="services w-100 text-center">
				              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-rent"></span></div>
				              	<div class="text w-100">
					                <h3 class="heading mb-2"> </h3>
					              </div>
					            </div>      
					          </div>
					        </div>
					        
	  						</div>
	  					</div>
	  				</div>
				</div>
  		</div>
</section>
<section class="ftco-section ftco-no-pt bg-light">
    	<div class="container">
    		<div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
          	<span class="subheading">What we offer</span>
            <h2 class="mb-2">Feeatured Vehicles</h2>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-12">
    				<div class="carousel-car owl-carousel">
					@foreach($ds_xe as $elm)
    					<div class="item">
    						<div class="car-wrap rounded ftco-animate">
							<div class="img rounded d-flex align-items-end" style="background-image: url(images/car-1.jpg);">
							<img src="{{ URL::to('/') }}/imgs/{{ $elm->HinhAnh}}" width="349" height="262"></img>
    					</div>
		    					<div class="text">
		    					<h2 class="mb-0"><a href="#">{{$elm->TenXe}}</a> || @if($elm->UuDai>0)<span style="color:red">- {{$elm->UuDai}} %</span> @endif</h2>
							
		    					<div class="d-flex mb-3">
	    						<span class="cat">
									@foreach($ds_hang_xe as $hang_xe)
									@if($hang_xe->hangxe_id == $elm->hangxe_id)
										{{$hang_xe->TenHangXe}}
									@endif
									@endforeach
								</span>
	    						<p class="price ml-auto">{{number_format($elm->GiaThue)}}<span>/Ngày</span></p>
    						</div>	
							<p class="d-flex mb-0 d-block">
							@if(!Session::has('Email'))
							<a href="{{route('DangNhap')}}" class="btn btn-primary py-2 mr-1">Đặt Xe</a> 
							@else
							<a href="{{route('Giaodien.FormDatXe',['xe_id' => $elm->xe_id])}}" class="btn btn-primary py-2 mr-1">Đặt Xe</a> 
							@endif
							<a href="{{route('Giaodien.ThongTinChiTiet',['xe_id' => $elm->xe_id])}}" class="btn btn-secondary py-2 ml-1">Chi Tiết</a></p>
		    					</div>
		    				</div>
    					</div>
						@endforeach
    					
    				
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
    <section class="ftco-section ftco-about">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/about.jpg);">
					</div>
					<div class="col-md-6 wrap-about ftco-animate">
	          <div class="heading-section heading-section-white pl-md-5">
	          	<span class="subheading">Về chúng tôi</span>
	            <h2 class="mb-4">Chào mừng bạn đến với ĐẶTXE-SUP</h2>

	            <p>Hệ thống đặt xe thông minh</p>
	            <p>Chúng tôi có nhiều năm kinh nghiệm trong lĩnh vực cho thuê xe tự lái</p>
	
	          </div>
					</div>
				</div>
			</div>
	</section>
	<section class="mt-5">
	</section>

	
		
     



 

  	

   
		
</section>
</body>	
@endsection