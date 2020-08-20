@extends('back_end.contents.hethong.he_thong_app')
@section('hethong')

<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Nhập thông tin tìm kiếm</h3>
              </div>  
              <form action="{{route('QuanLyXe.TimKiem')}}" method="get" id="timkiem" role="form">
                    @csrf                  
                            <div class="card-body ">
                               <div class="form-group">        
                                    <label >Họ tên <span style="color:red;">(*)</span>:</label>                       
                                    <input type="text"  class="form-control" name="email">                                   
                                </div>
                                <div class="row">                                
                                    <div class="col-sm">                                              
                                        <button type="submit" class="btn btn-default btn-sm"  >Tìm kiếm</button>                                                                         
                                   </div>
                                   <div class="col-sm">                                             
                                        <a type="button" class="btn btn-default btn-sm"  href="{{route('Hethong.index')}}" >Tải lại trang</a>                                                 
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



<div class="container-fluid">
    <div class="card">
            <div class="card-header">
            <a type="button" class="btn btn-default btn-sm" href="{{route('Hethong.themmoi')}}">Thêm mới</a>       
            <hr/>    
              <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap " >              
                <thead>
                        <tr>
                            <th>
                            
                            </th>
                            <th >Mã</th>
                            <th >E-mail </th>
                            <th>Mật khẩu</th>
                            <th>Họ Tên </th>
                            <th>Số điện thoại </th>
                            <th>Ngày sinh</th>
                            <th>Giới tính</th>
                            <th>Địa chỉ</th>
                            <th>Quyền</th>
                            <th>Trạng thái</th>                           
                        </tr>
                    </thead>           
                    <tbody>  
                    @foreach($data_timkiem as $data)
                     <tr>
                      <td>
                            <div class="dropdown" style="cursor: pointer;"> 
                            <i class="far fa-hand-rock dropdown-toggle" data-toggle="dropdown"></i>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">                                  
                                <a type="button" class="dropdown-item btn btn-danger" href="{{route('Hethong.thongtinsua',['admin_id' => $data->admin_id])}}"><i class="fas fa-pen-alt"></i> Sửa</a>   
                                @if($data->Quyen!=0)             
                                <a type="button" class="dropdown-item btn btn-danger" href="{{route('Hethong.Xoa',['admin_id' => $data->admin_id])}}"><i class="far fa-trash-alt"  style="color: red;"></i> Xóa</a>   
                                @endif         
                            </div>
                            </div>
                      </td>
                      <td>admin_{{$data->admin_id}}</td>
                      <td>{{$data->email}}</td>
                      <td>{{$data->MatKhau}}</td>
                      <td>{{$data->HoTen}}</td>
                      <td>{{$data->SoDienThoai}}</td>
                      <td>{{$data->NgaySinh}}</td>
                      
                      @if( $data->GioiTinh == 0)
                            <td>Nam</i></td>
                        @else   
                            <td>Nữ</i></td>
                        @endif
                        <td>{{$data->DiaChi}}</td>
                      @if( $data->Quyen == 0)
                            <td>Admin</td>
                      @else   
                            <td>Nhân viên</i></td>
                      @endif
                      @if( $data->TrangThai == 1)
                            <td><i class="fas fa-check " style="color:blue"></i></td>
                        @else   
                            <td><i class="fas fa-times" style="color:red"></i></td>
                      @endif
                     </tr>
                     @endforeach
                    </tbody>
             </table>         
            </div>
           
</div>

@endsection