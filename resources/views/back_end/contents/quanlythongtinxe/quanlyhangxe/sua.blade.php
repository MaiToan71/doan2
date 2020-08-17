@extends('back_end.contents.quanlythongtinxe.quanlyhangxe.hang_xe_app')
@section('hangxe')
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
              <form method="post" id="themmoi" role="form">
                    @csrf      
                    @foreach($list_data as $data)            
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên Hãng Xe<span style="color:red;">(*)</span>:</label>
                                <input type="text" class="form-control" name="TenHang"  value="{{$data->TenHangXe}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Quốc Gia<span style="color:red;">(*)</span>:</label>
                                <input type="text" class="form-control" name="QuocGia" value="{{$data->QuocGia}}">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-default">Sửa </button>
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