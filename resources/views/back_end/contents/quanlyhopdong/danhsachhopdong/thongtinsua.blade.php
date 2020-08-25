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
                <h3 class="card-title">Nhập thông tin</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form  method="post" id="themmoi" role="form" enctype="multipart/form-data">
                    @csrf
                    @foreach($data as $elm)
                    <div class="container">
                            <div class="row">
                                <div class="col-sm">
                                    <div class="form-group">
                                        <label >Tên hợp đồng <span style="color:red;">(*)</span>:</label>
                                        <input type="text" class="form-control" name="tenhopdong" value="{{$elm->TenHopDong}}">
                                    </div>
                                    <div class="form-group">
                                        <label >Thời gian bắt đầu<span style="color:red;">(*)</span>:</label>
                                        <input type="date" class="form-control" name="batdau" value="{{$elm->ThoiGianNhanXe}}">
                                    </div>
                                    <div class="form-group">
                                        <label >THời gian kết thúc<span style="color:red;">(*)</span>:</label>
                                        <input type="date" class="form-control" name="ketthuc" value="{{$elm->ThoiGianTraXe}}">
                                    </div>                                                  
                                    <div class="form-group ">
                                        <button type="submit" class="btn btn-default btn-sm" style="width:100px;margin-top:120px;" >Sửa</button>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-group">
                                        <label >Tên khách hàng<span style="color:red;">(*)</span>:</label>
                                        @foreach($names as $name)
                                            @if($name->khachhang_id  == $elm->khachhang_id)
                                        <input type="text" class="form-control" disabled name="tenkhachhang" value="{{$name->Ten}}">
                                            @endif
                                        @endforeach
                                    </div>
                                    <div class="form-group">
                                        <label >Tiền thế chấp <span style="color:red;">(*)</span>:</label>
                                        <input type="text" class="form-control" name="tienthechap" value="{{$elm->TienTheChap}}">
                                    </div>                                                 
                                    <div class="form-group">
                                        <label >Hình ảnh hợp đồng: <span style="color:red;">(*)</span>:</label>
                                        <input type="file" class="form-control-file" name="filehopdong">
                                        <img src="{{ URL::to('/') }}/imgs/{{ $elm->FileHopDong }}" width="100" height="120">
                                    </div>
                                    <div class="form-group mt-4">
                                        <a type="button" class="btn btn-default btn-sm" style="width:100px;" href="{{route('QuanLyHopDong.index')}}">Quay lại</a>
                                    </div>
                                </div>                               
                            </div>
                           
                            </div>                         
                        </div>
                        @endforeach
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
@endsection