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
                <h3 class="card-title">Tính số tiền vi phạm</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form  method="post" id="themmoi" role="form" enctype="multipart/form-data">
                    @csrf
                    <div class="container">                        
                            <div class="form-group">
                                <label style="color:blue;">Ghi chú<span style="color:red;">(*)</span>:</label>
                                <ul>
                                    <li>Quãng đường đã vi phạm: (km)</li>
                                    <li>Thời gian đã vi phạm: (ngày)</li>
                                </ul>
                            </div>
                            <div class="form-group">
                                <label style="color:blue;">Tính số tiền vi phạm<span style="color:red;">(*)</span>:</label>
                            </div>
                            <div class="form-group">
                                <table>
                                    <tr>
                                        
                                        <td><label >Quãng đường đã quá<span style="color:red;">(km)</span>:</label><input type="text" name="quangduong" class="form-control"/></td>
                                        <td><div style="margin-top:30px;margin-left:10px;margin-right:10px"><b style="font-size: 32px; ">+</b></div></td>
                                        <td><label >Thời gian đã quá<span style="color:red;">(tiền/ngày)</span>:</label><input type="text" name="thoigianqua" class="form-control"/></td>
                                        <td><div style="margin-top:30px;margin-left:10px;margin-right:10px"><b style="font-size: 32px; ">=</b></div></td>
                                        <td><label >Tiền phải trả:<span style="color:red;">(*)</span>:</label><input type="text" name="tientra" class="form-control"/></td>
                                       
                                    </tr>
                                    <tr>    
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        
                                    </tr>
                                </table>

                                    
                                    
                            </div> 
                           
                            <div class="form-group">
                                <button type="submit" class="btn btn-default btn-sm" style="width:100px;" >Tính</button>                                  
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
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Nhập thông tin vi phạm</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form  method="post" id="themmoi" role="form" enctype="multipart/form-data">
                    @csrf
                    <div class="container">                        
                            <div class="row">
                                <div class="col-sm">
                                    <div class="form-group">
                                        <label >Mã hợp đồng <span style="color:red;">(*)</span>:</label>
                                        <input type="text" class="form-control-file" disabled name="mahopdong" value="HĐ">
                                    </div>
                                    <div class="form-group">
                                        <label >Mô tả lỗi vi phạm <span style="color:red;">(*)</span>:</label>
                                        <textarea class="form-control" name="loivipham" rows="3"></textarea>
                                    </div>
                                    
                                    
                                    <div class="form-group pt-5">
                                        <button type="submit" class="btn btn-default btn-sm" style="width:100px;" >Thêm mới</button>
                                    </div>
                                </div>
                                <div class="col-sm">                                    
                                    <div class="form-group">
                                        <label >Hình ảnh vi phạm <span style="color:red;">(*)</span>:</label>
                                        <input type="file" class="form-control-file" name="hinhanhvipham">
                                    </div>
                                    <div class="form-group">
                                        <label >Tiền đã thế chấp <span style="color:red;">(*)</span>:</label>
                                        <input type="input" class="form-control" name="tienthechap">
                                    </div>
                                    <div class="form-group">
                                        <label >Số tiền phạt <span style="color:red;">(*)</span>:</label>
                                        <input type="input" class="form-control" name="tienthechap">
                                    </div>
                                    
                                   
                                    <div class="form-group">
                                        <a type="button" class="btn btn-default btn-sm" style="width:100px;" href="{{route('QuanLyHopDong.hienthilanmot')}}">Quay lại</a>
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
@endsection