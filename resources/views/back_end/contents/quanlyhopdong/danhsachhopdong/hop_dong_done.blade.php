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
              <form method="get" id="timkiem" role="form">
                    @csrf                  
                        <div class="card-body">
                        <div class="row">
                                <div class="col-sm col-md-2 mt-1">
                                  <label for="exampleInputEmail1">Nội dung cần tìm<span style="color:red;">(*)</span>:</label>
                                </div>
                                <div class="col-sm col-md-6">
                                  <div class="form-group">                               
                                  <input type="text" class="form-control" name="TenHang" >
                                  </div>  
                                </div>
                                <div class="col-sm ml-4">
                                  <div class="form-group">
                                  <button type="submit" class="btn btn-default ">Tìm kiếm</button>
                                  </div>
                                </div>
                              </div>                                                                              
                       </div>
                </form>
            </div>
            <!-- /.card -->
            </div>       
        </div>
        <!-- /.row -->
      </div>
</section>
<section>
<div class="container-fluid">
    <div class="card">
    <hr>
    <h4 style="margin-left:20px;">Danh sách hợp đồng đã thành tiền</h4>
    <hr>   
              <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
            <table class="table table-hover " >
                <thead>
                <tr>
                    <th ></th>
                    <th >Mã hợp đồng</th>
                    <th>Tên khách hàng </th>
                    <th>Tên hợp đồng </th>
                   
                    <th >Tiền thế chấp</th>
                    <th >Bắt đầu</th>                   
                    <th >Ngày trả</th>
                    <th >Duyệt</th>
                    <th >Trạng thái</th>                          
                </tr>
            </thead>
            <tbody>                           
                  @foreach($xog as $elm)
                  <tr>
                    <td>
                   
                    </td>
                    <td>HĐ{{$elm->hopdong_id}}</td>
                    <td>{{$elm->khachhang_id}}</td>
                    <td>{{$elm->TenHopDong}}</td>
                    
                    <td>{{$elm->TienTheChap}}</td>
                    <td>{{$elm->ThoiGianTheChap}}</td>
                    <td>{{$elm->ThoiGianTraXe}}</td>
                    
                    @if($elm->Duyet == 1)                  
                      <td style="color:blue">Đang đợi duyệt</td>
                    @elseif($elm->Duyet == 2) 
                      <td style="color:#006600">Đã duyệt lần 1</td>
                    @elseif($elm->Duyet == 3) 
                      <td style="color:red">Hợp đồng có vi phạm</td>
                    @else
                      <td style="color:blue">Đã thành tiền</td>
                    @endif
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
            
</div>
</section>
@endsection