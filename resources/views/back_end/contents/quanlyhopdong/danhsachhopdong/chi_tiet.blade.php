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
                                        <label >Tên hợp đồng <span style="color:red;">(*)</span>:</label>
                                        <input type="text" class="form-control" disabled name="tenhopdong" value="{{$elm->TenHopDong}}">
                                    </div>
                                    <div class="form-group">
                                        <label >Tên khách hàng<span style="color:red;">(*)</span>:</label>
                                       
                                        <input type="text" class="form-control" disabled name="tenkhachhang" value="{{$elm->Ten}}">
                                        
                                    </div>
                                    <div class="form-group">
                                        <label >Tên xe:<span style="color:red;">(*)</span>:</label>
                                        <input type="datetime" class="form-control" disabled name="ketthuc" value="{{$elm->TenXe}}">
                                    </div> 
                                    <div class="form-group">
                                        <label >Mã xe <span style="color:red;">(*)</span>:</label>
                                        <input type="text" class="form-control" disabled name="tenhopdong" value="{{$elm->xe_id}}">
                                    </div>
                                    <div class="form-group">
                                        <label >Hãng xe <span style="color:red;">(*)</span>:</label>
                                        <input type="text" class="form-control" disabled name="tenhopdong" value="{{$elm->TenHangXe}}">
                                    </div>
                                    <div class="form-group">
                                        <label >Tiền thế chấp<span style="color:red;">(*)</span>:</label>
                                        <input type="datetime" class="form-control" disabled name="ketthuc" value="{{$elm->TienTheChap}}">
                                    </div>         
                                    <div class="form-group">
                                        <label >Mô tả lỗi<span style="color:red;">(*)</span>:</label>
                                        <textarea class="form-control" name="MoTaLoi" disabled rows="3" id="loivipham" >
                                        {{$elm->LoiViPham}}
                                        </textarea>                                      
                                    </div>                                                                                                             
                                </div>
                                <div class="col-sm">
                                    <div class="form-group">
                                        <label >Địa chỉ <span style="color:red;">(*)</span>:</label>
                                        <input type="text" class="form-control" disabled name="tenhopdong" value="{{$elm->TenHopDong}}">
                                    </div>
                                    <div class="form-group">
                                        <label >Bắt đầu:<span style="color:red;">(*)</span>:</label>
                                        <input type="text" class="form-control" disabled name="tienthechap" value="{{$elm->ThoiGianTheChap}}">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label >Kết thúc: <span style="color:red;">(*)</span>:</label>
                                        <input type="text" class="form-control" disabled name="tienthechap"  value="{{$elm->ThoiGianTraXe}}">
                                    </div>   
                                    <div class="form-group">
                                        <label >Loại xe <span style="color:red;">(*)</span>:</label>
                                        <input type="text" class="form-control" disabled name="tenhopdong" value="{{$elm->SoCho}} Chỗ">
                                    </div>  
                                    <div class="form-group">
                                        <label >Số lượng:<span style="color:red;">(*)</span>:</label>
                                        <input type="datetime" class="form-control" disabled name="ketthuc" value="{{$elm->SoLuong}}">
                                    </div>                                             
                                    <div class="form-group">
                                        <label >Tiền quá hạn: <span style="color:red;">(*)</span>:</label>
                                        <input type="text" class="form-control" disabled name="tienthechap" value="{{$elm->TienQuaHan}}">
                                       
                                    </div>
                                    <div class="form-group">
                                        <label >Hình ảnh hợp đồng: <span style="color:red;">(*)</span>:</label>
                                        <br>
                                        <img src="{{ URL::to('/') }}/imgs/{{ $elm->FileHopDong }}" width="100" height="120">
                                       
                                    </div>
                                    <div class="form-group mt-4">
                                        <a type="button" class="btn btn-default btn-sm" style="width:100px;" href="{{route('QuanLyHopDong.index')}}">Quay lại</a>
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