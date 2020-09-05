@extends('front_end.layouts.layout')
@section('body')
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/16.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate pb-5">
          	    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Cars <i class="ion-ios-arrow-forward"></i></span></p>
                <h1 class="mb-3 bread">Lựa chọn chiếc xe của bạn</h1>
            </div>
        </div>
    </div>
</section>
<div><form  method="post" id="chitiet" role="form" enctype="multipart/form-data">
                    @csrf
                @foreach($info as $elm) 
                    <div class="container" style="margin-top:15px;">
                            <div class="row">
                                <div class="col-sm">
                                    <div class="form-group">                                        
                                        <img src="{{ URL::to('/') }}/imgs/{{ $elm->HinhAnh}}" width="500" height="500"></img>
                                    </div>                                        
                                </div>
                                <div class="col-sm">
                                    <div class="form-group">
                                        <h5 class="price ml-auto" style="color: red;">{{$elm->TenXe}}</h5>
                                        <p class="price ml-auto">Hãng Xe: 
                                            @foreach($ds_hang_xe as $hang_xe)
									        @if($hang_xe->hangxe_id == $elm->hangxe_id)
										    {{$hang_xe->TenHangXe}}
									        @endif
                                            @endforeach
                                        </p>
                                        <p class="price ml-auto">Số chỗ: 
                                            @foreach($loai_xe as $loai_xe)
									        @if($loai_xe->loaixe_id == $elm->loaixe_id)
										    {{$loai_xe->SoCho}}
									        @endif
                                            @endforeach
                                        </p>
                                        <p class="price ml-auto">Năm Sản Xuất: {{$elm->NamSanXuat}}</p>
                                        <p class="price ml-auto">Nhiên Liệu: {{$elm->NhienLieu}}</p>
                                        <p class="price ml-auto">Dung Tích: {{$elm->DungTich}}</p>
                                        <p class="price ml-auto">Tình trạng xe:
                                         {{$elm->DungTich}}
                                         </p>
                                        <h1 class="price ml-auto" style="color: red;">Giá: {{number_format($elm->GiaThue)}}<span>/day</span></h1> 
                                        @if(!Session::has('Email'))
                                        <a href="{{route('DangNhap')}}" class="btn btn-primary py-2 mr-1">Đặt Xe</a> 
                                        @else
                                        <a href="{{route('Giaodien.FormDatXe',['xe_id' => $elm->xe_id])}}" class="btn btn-primary py-2 mr-1">Đặt Xe</a> 
                                        @endif   
                                    </div>
                                    </div>
                                </div>                               
                            </div>
                           
                            </div>                         
                        </div>
                @endforeach
                </form>
</div>
@endsection
    