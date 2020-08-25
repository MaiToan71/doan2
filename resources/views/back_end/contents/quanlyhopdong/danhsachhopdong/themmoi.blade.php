@extends('back_end.contents.quanlyhopdong.danhsachhopdong.hopdong_app')
@section('hopdong')

<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
             
                <h3 class="card-title">Thêm mới hợp đồng</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('QuanLyHopDong.ThucHienThem')}}" method="post" id="themmoi" role="form" enctype="multipart/form-data">
                 @csrf
                    <div class="container">
                            <div class="row">
                                <div class="col-sm">
                                    <div class="form-group">
                                        <label >Tên hợp đồng <span style="color:red;">(*)</span>:</label>
                                        <input type="text" class="form-control"  name="tenhopdong">
                                    </div>
                                    <div class="form-group">
                                    <label>Tên khách hàng</label>
                                        <select class="select2bs4" multiple="multiple" name="maKhachHang" id="maKhachHang" data-placeholder="Chọn khách hàng"
                                                style="width: 100%;">
                                                @foreach($dsKhachHang as $khachHang)
                                                <option value="{{$khachHang->khachhang_id}}">{{$khachHang->Ten}}: KH_{{$khachHang->khachhang_id}}</option>
                                                @endforeach
                                        </select>
                                    </div>
                                     
                                    
                                   
                                    <div class="form-group">
                                        <label >Tiền thế chấp<span style="color:red;">(*)</span>:</label>
                                        <input type="datetime" class="form-control"  name="TienTheChap" >
                                    </div>         
                                    <div class="form-group">
                                        <label >Bắt đầu:<span style="color:red;">(*)</span>:</label>
                                        <input type="date" class="form-control"  name="batDauDat" >
                                    </div>
                                    <div class="form-group mt-4">
                                        <button type="submit" class="btn btn-default btn-sm" style="width:100px;">Thêm mới</button>
                                    </div>                                                                                               
                                </div>
                                <div class="col-sm">
                                    
                                    <div class="form-group">
                                        <label >Địa chỉ nhận xe <span style="color:red;">(*)</span>:</label>
                                        <input type="text" class="form-control"  name="tenhopdong" >
                                    </div>
                                    <div class="form-group">
                                        <label >Tên xe:<span style="color:red;">(*)</span>:</label>
                                        <select class="select2bs4" multiple="multiple" name="maXe" data-placeholder="Chọn khách hàng"
                                                style="width: 100%;">
                                                @foreach($dsXe as $xe)
                                                <option value="{{$xe->xe_id}}">{{$xe->TenXe}}</option>
                                                @endforeach
                                        </select>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label >Số lượng:<span style="color:red;">(*)</span>:</label>
                                        <input type="text" class="form-control"  name="SoLuong" >
                                    </div>
                                    <div class="form-group">
                                        <label >Kết thúc: <span style="color:red;">(*)</span>:</label>
                                        <input type="date" class="form-control"  name="ketThuc"  >
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
<script>
  $().ready(function () {
    //Initialize Select2 Elements
    $('.select2').select2();
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
   
  })
</script>
@endsection