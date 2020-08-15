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
              <form method="post" id="themmoi" role="form">
                    @csrf                  
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nội dung cần tìm<span style="color:red;">(*)</span>:</label>
                                <input type="text" class="form-control" name="TenHang" >
                            </div>                           
                            <div class="form-group">
                                <button type="submit" class="btn btn-default btn-sm">Tìm kiếm</button>
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
<section>
<div class="container-fluid">
    <div class="card">
            <div class="card-header">
            <a type="button" class="btn btn-default btn-sm">Thêm mới</a>       
            <hr/>    
              <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
            <table class="table table-hover " >
                <thead>
                <tr>
                    <th ></th>
                    <th >Mã hợp đồng</th>
                    <th>Tên hợp đồng </th>
                    <th>Hình ảnh </th>
                    <th >Tiền thế chấp</th>
                    <th >Bắt đầu</th>                   
                    <th >Ngày trả</th>
                    <th >Duyệt</th>
                    <th >Trạng thái</th>                          
                </tr>
            </thead>
            <tbody>            
                <tr>
                    
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                </tr>
            </tbody>
             </table>         
            </div>
            
</div>
</section>
@endsection