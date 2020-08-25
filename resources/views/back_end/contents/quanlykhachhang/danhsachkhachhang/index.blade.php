@extends('back_end.contents.quanlykhachhang.danhsachkhachhang.khachhang_app')
@section('khachhang')
<div class="container-fluid">
    <div class="card">
            <!-- <div class="card-header"> -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Nhập Thông Tin Tìm Kiếm</h3>
              </div>  
              <form action="{{route('QuanLyKhachHang.TimKiem')}}" method="get" id="timkiem" role="form">
                    @csrf                  
                            <div class="card-body ">
                            <div class="row">
                            <div class="col-sm">
                            <div class="form-group" >       
                                <label >Tên Khách Hàng <span style="color:red;">(*)</span>:</label>                        
                                <input type="text"  class="form-control" name="Ten" placeholder="Công Chúa Toản">
                            </div>
                            </div>
                            <div class="col-sm">
                            <div class="form-group "  >        
                                <label >Số Điện Thoại<span style="color:red;">(*)</span>:</label>                       
                                <input type="number"  class="form-control" name="SoDienThoai" placeholder="0986868686">
                            </div>
                            </div>
                            <div class="col-sm">
                            <div class="form-group mr-3"  > 
                                <label >Email<span style="color:red;">(*)</span>:</label>
                                <input type="text"  class="form-control" name="Email" placeholder="ToanXinhDepRangNgoi@gmail.com">
                            </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-default btn-sm"  name="find" >Tìm kiếm</button>                                                  
                        </div>
                </form>
            </div>
            <!-- <a type="button" class="btn btn-default btn-sm" href="{{route('QuanLyXe.ThemMoi')}}">Thêm mới</a>        -->
            <hr/>    
              <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
            <table class="table table-hover " >
                <thead>
                <tr>
                    <th></th>
                    <th>Mã_KH</th>
                    <th>Họ Tên</th>
                    <th>Email</th>
                    <th>Tên xe</th>
                    <th>Hãng xe</th>
                    <th>Số chỗ</th>
                    <th>Ngày hẹn</th>
                    <th>Giờ hẹn</th>                  
                    <th>Trạng thái</th>         
                </tr>
            </thead>
            <tbody>            
        
            @foreach($list_cust as $elm)
                  <tr>
                    <td>
                    <div class="dropdown" style="cursor: pointer;"> 
                            <i class="far fa-hand-rock dropdown-toggle" data-toggle="dropdown"></i>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"> 
                        <a type="button" class="dropdown-item btn btn-danger" href="{{route('QuanLyKhachHang.chitiet',['khachhang_id' => $elm->khachhang_id])}}"><i class="fas fa-pen-alt"></i> Chi Tiết</a>                   
                        <a type="button" class="dropdown-item btn btn-danger" href="{{route('QuanLyKhachHang.sua',['khachhang_id' => $elm->khachhang_id])}}"><i class="fas fa-pen-alt"></i> Sửa</a>                   
                        <a type="button" class="dropdown-item btn btn-danger" href="{{route('QuanLyKhachHang.xoa',['khachhang_id' => $elm->khachhang_id])}}"  onclick="return confirm('Bạn xác nhận duyệt chứ?')"><i class="fas fa-pen-alt"></i> Xóa</a>               
                           
                        </div>
                        </div>
                    </td>
                    <td>KH_{{$elm->khachhang_id}}</td>
                    <td>{{$elm->Ten}}</td>
                    <td>{{$elm->Email}}</td>
                    
                    <td>{{$elm->TenXe}}</td>
                    <td>{{$elm->TenHangXe}}</td>
                    <td>{{$elm->SoCho}} chỗ</td>
                    <td>{{$elm->NgayHen}}</td>
                    <td>{{$elm->ThoiGianHen}}</td>
                    
                    @if( $elm->TrangThai == 1)
                            <td><i class="fas fa-check " style="color:blue"></i></td>
                    @else   
                            <td><i class="fas fa-times" style="color:red"></i></td>
                    @endif
                </tr>
                @endforeach
            
            </tbody>
             </table>         
           
            
</div>
@endsection