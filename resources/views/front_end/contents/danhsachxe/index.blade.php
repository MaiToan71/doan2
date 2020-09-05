@extends('front_end.layouts.layout')
@section('body')
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/16.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Cars <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Hãy lựa chọn chiếc xe của bạn</h1>
          </div>
        </div>
      </div>
    </section>
		

		<section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row">
				@foreach($ds_xe as $elm)
    			<div class="col-md-4">
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
    		<div class="row mt-5">
          <div class="col text-center">
		  <div style="display:flex;justify-content:center;">
                <nav arial-label="Page navifation">
                    {!! $ds_xe->links() !!}
                </nav>
             </div>
            
          </div>
        </div>
    	</div>
    </section>
@endsection
    



