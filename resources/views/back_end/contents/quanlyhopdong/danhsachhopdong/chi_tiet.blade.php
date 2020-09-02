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
                                        <input type="text" class="form-control" disabled  value="{{$elm->ThoiGianDatTruoc}}">
                                    </div>
                                    <div class="form-group">
                                        <label >Số chỗ:</label>
                                        <input type="text" class="form-control" disabled  value="{{$elm->ThoiGianDatTruoc}}">
                                    </div>
                                      
                                    <div class="form-group">
                                        <label >Quá hạn theo giờ (đồng):</label>
                                        <input type="text" class="form-control" disabled value="{{$elm->TienTheChap}}">
                                    </div>  
                                    <div class="form-group">
                                        <label >Quá hạn theo ngày (đồng):</label>
                                        <input type="text" class="form-control" disabled  value="{{$elm->TienTheChap}}">
                                    </div>
                                    <div class="form-group">
                                        <label >Tiền thế chấp:</label>
                                        <input type="text" class="form-control" disabled name="tenhopdong" value="{{$elm->TienTheChap}}">
                                    </div>
                                    <div class="form-group">
                                        <label >Tien quá hạn:</label>
                                        <input type="text" class="form-control" disabled name="tenhopdong" value="{{$elm->TienQuaHan}}">
                                    </div>
                                    <div class="form-group">
                                        <label  style="color:red">Tổng giá trị hợp đồng: </label>
                                        <input type="text" class="form-control" disabled name="tongtien" value="{{$elm->TongTien}}">                              
                                    </div>    
                                    <div class="form-group mt-4">
                                        <a type="button" class="btn btn-default btn-sm" style="width:100px;" href="{{route('QuanLyHopDong.index')}}">Quay lại</a>
                                    </div>                                                                                                      
                                </div>
                                <div class="col-sm">
                                    <div class="form-group">
                                        <label  >Tên khách:</label>
                                        <input type="text" class="form-control" disabled  value="{{$elm->ThoiGianDatTruoc}}">
                                    </div>
                                    <div class="form-group">
                                        <label >Địa chỉ:</label>
                                        <input type="text" class="form-control" disabled  value="{{$elm->ThoiGianDatTruoc}}">
                                    </div>
                                    <div class="form-group">
                                        <label >Tên xe:</label>
                                        <input type="text" class="form-control" disabled  value="{{$elm->ThoiGianDatTruoc}}">
                                    </div>
                                    <div class="form-group">
                                        <label >Ngày tạo :</label>
                                        <input type="datetime" class="form-control" disabled  value="{{$elm->CapNhatNgay}}">
                                    </div> 
                                   
                                    <div class="form-group">
                                        <label  style="color:blue;">Thời gian đặt hẹn:</label>
                                        <input type="text" class="form-control" disabled  value="{{$elm->ThoiGianDatTruoc}}">
                                    </div>
                                    <div class="form-group">
                                        <label  style="color:blue;">Thời gian nhận xe :</label>
                                        <input type="text" class="form-control" disabled name="tenhopdong" value="{{$elm->ThoiGianNhanXe}}">
                                    </div>
                                    <div class="form-group">
                                        <label  style="color:blue;">Thời gian trả xe:</label>
                                        <input type="text" class="form-control" disabled name="tenhopdong" value="{{$elm->ThoiGianTraXe}}">
                                    </div>
                                    <div class="form-group">
                                        <label  style="color:blue;">Ngày Trả thực tế:</label>
                                        <input type="text" class="form-control" disabled name="tenhopdong" value="{{$elm->NgayTraThucTe}}">
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