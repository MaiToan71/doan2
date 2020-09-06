@extends('back_end.contents.quanlyhopdong.danhsachhopdong.hopdong_app')
@section('hopdong')
@foreach($danhsach_hd as $elm)
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
             
                <h3 class="card-title">Thông tin chi tiết mã hợp đồng: HĐ{{$elm->hopdong_id}}</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form  method="post" id="themmoi" role="form" enctype="multipart/form-data">
                 
                    <div class="container">
                            <div class="row">
                                <div class="col-sm">
                                      
                                    <div class="form-group">
                                        <label >Tên hợp đồng :</label>
                                        <input type="text" class="form-control" disabled value="{{$elm->TenHopDong}}">
                                    </div>
                                    <div class="form-group">
                                        <label  >Hãng  xe:</label>
                                        @foreach($xes as $elm_xe)
                                        @if($elm_xe->xe_id == $elm->xe_id)
                                        @foreach($hangXes as $elm_hang)
                                        @if($elm_hang->hangxe_id == $elm_xe->hangxe_id)
                                        <input type="text" class="form-control" disabled  value="{{$elm_hang->TenHangXe}}">
                                        @endif
                                        @endforeach
                                        @endif
                                        @endforeach
                                    </div>
                                    <div class="form-group">
                                        <label >Số chỗ:</label>
                                        @foreach($xes as $elm_xe)
                                        @if($elm_xe->xe_id == $elm->xe_id)
                                        @foreach($loaiXes as $elm_loai)
                                        @if($elm_loai->loaixe_id == $elm_xe->loaixe_id)
                                        <input type="text" class="form-control" disabled  value="{{$elm_loai->SoCho }} chỗ">
                                        @endif
                                        @endforeach
                                        @endif
                                        @endforeach
                                       
                                    </div>
                                      
                                    <div class="form-group">
                                        <label  style="color:blue;">Thời gian đặt hẹn:</label>
                                        <input type="text" class="form-control" disabled  value="{{$elm->ThoiGianDatTruoc}}">
                                    </div>
                                    <div class="form-group">
                                        <label >Tiền thế chấp:</label>
                                        <input type="text" class="form-control" disabled name="tenhopdong" value="{{number_format($elm->TienTheChap)}} đồng">
                                    </div>
                                    <div class="form-group">
                                        <label >Tien quá hạn:</label>
                                        <input type="text" class="form-control" disabled name="tenhopdong" value="{{$elm->TienQuaHan}}">
                                    </div>
                                    <div class="form-group">
                                        <label  style="color:red">Tổng giá trị hợp đồng: </label>
                                        <input type="text" class="form-control" disabled name="tongtien" value="{{number_format($elm->TongTien)}} đồng">                              
                                    </div>    
                                    <div class="form-group mt-4">
                                        <a type="button" class="btn btn-default btn-sm" style="width:100px;" href="{{route('QuanLyHopDong.index')}}">Quay lại</a>
                                    </div>                                                                                                      
                                </div>
                                <div class="col-sm">
                                    <div class="form-group">
                                        <label  >Tên khách:</label>
                                        @foreach($khachhangs as $elm_khach)
                                        @if($elm_khach->khachhang_id  == $elm->khachhang_id)
                                        <input type="text" class="form-control" disabled  value="{{$elm_khach->Ten}}">
                                        @endif
                                        @endforeach
                                    </div>
                                    <div class="form-group">
                                        <label >Địa chỉ:</label>
                                        @foreach($khachhangs as $elm_khach)
                                        @if($elm_khach->khachhang_id  == $elm->khachhang_id)
                                        <input type="text" class="form-control" disabled  value="{{$elm_khach->DiaChi}}">
                                        @endif
                                        @endforeach
                                    </div>
                                    <div class="form-group">
                                        <label >Tên xe:</label>
                                        @foreach($xes as $elm_xe)
                                        @if($elm_xe->xe_id == $elm->xe_id)
                                        <input type="text" class="form-control" disabled  value="{{$elm_xe->TenXe}}">
                                        @endif
                                        @endforeach
                                    </div>
                                    <div class="form-group">
                                        <label >Ngày tạo :</label>
                                        <input type="datetime" class="form-control" disabled  value="{{date('d-m-Y h:i',strtotime($elm->CapNhatNgay ))}}">
                                    </div> 
                                   
                                  
                                    <div class="form-group">
                                        <label  style="color:blue;">Thời gian nhận xe :</label>
                                        <input type="text" class="form-control" disabled name="tenhopdong" value="{{date('d-m-Y h:i',strtotime($elm->ThoiGianNhanXe ))}}">
                                    </div>
                                    <div class="form-group">
                                        <label  style="color:blue;">Thời gian trả xe:</label>
                                        <input type="text" class="form-control" disabled name="tenhopdong" value="{{date('d-m-Y h:i',strtotime($elm->ThoiGianTraXe )) }}">
                                    </div>
                                    <div class="form-group">
                                        <label  style="color:blue;">Ngày Trả thực tế:</label>
                                        <input type="text" class="form-control" disabled name="tenhopdong" value=" {{$elm->NgayTraThucTe}}">
                                    </div>
      
                                </div>                               
                            </div>
                           
                            </div>                         
                        </div>
                       
                </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
</section>
@endforeach
@endsection