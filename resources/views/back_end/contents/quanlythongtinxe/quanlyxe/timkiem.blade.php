@extends('back_end.contents.quanlythongtinxe.quanlyxe.xe')
@section('xe')
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
                            <div class="row">
                            <div class="col-sm">
                            <div class="form-group" >       
                                <label >Tên xe <span style="color:red;">(*)</span>:</label>                        
                                <input type="text"  class="form-control" name="tenxe" placeholder="Xe méc xè đẹt">
                            </div>
                            </div>
                            <div class="col-sm">
                            <div class="form-group "  >        
                                <label >Hãng xe <span style="color:red;">(*)</span>:</label>                       
                                <select id="hangxe" class="form-control" name="hangxe" class="required">
                                <option value="">Chọn hãng xe...</option>
                                @foreach($list_hang_xe as $hang_xe)                                  
                                    <option value="{{$hang_xe->hangxe_id}}">{{$hang_xe->TenHangXe}}</option>
                                @endforeach
                                </select>
                            </div>
                            </div>
                            <div class="col-sm">
                            <div class="form-group mr-3"  > 
                                <label >Loại xe <span style="color:red;">(*)</span>:</label>                              
                                <select id="loaixe"  class="form-control" name="loaixe" class="required">
                                    <option value="">Chọn loại xe...</option>
                                @foreach($list_loai_xe as $loai_xe)  
                                    <option value="{{$loai_xe->loaixe_id}}">{{$loai_xe->SoCho}} chỗ</option>
                                @endforeach
                                </select>
                            </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm">
                                <button type="submit" class="btn btn-default btn-sm"  name="find" >Tìm kiếm</button> 
                                </div>
                                <div class="col-sm">
                                <a type="submit" class="btn btn-default btn-sm" href="{{route('QuanLyXe.index')}}" >Tải lại trang</a>  
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
            <a type="button" class="btn btn-default btn-sm" href="{{route('QuanLyXe.ThemMoi')}}">Thêm mới</a>       
            <hr/>    
              <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
            <table class="table table-hover " >
                <thead>
                <tr>
                    <th ></th>
                    <th >STT</th>
                    <th>Tên xe </th>
                    <th >Hãng xe</th>
                    <th >Loại xe</th>
                    <th >Năm sản xuất </th>
                    <th >Loại nhiên liệu</th>
                    <th >Dung tích</th>
                    <th >Giới hạn</th>
                    <th >Mô tả</th>
                    <th >Giấy tờ xe</th>
                    <th >Hình ảnh xe</th>                    
                    <th >Trạng thái</th>         
                </tr>
            </thead>
            <tbody>            
                @foreach($timkiem as $elm)
                    <tr>
                        <td> 
                        <div class="dropdown" style="cursor: pointer;"> 
                            <i class="far fa-hand-rock dropdown-toggle" data-toggle="dropdown"></i>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">        
                            <a type="button" class="dropdown-item btn btn-danger" href="{{route('QuanLyXe.Sua',['xe_id' => $elm->xe_id])}}"  ><i class="fas fa-pen-alt"></i> Sửa</a>               
                            <a type="button" class="dropdown-item btn btn-danger" href="{{route('QuanLyXe.Xoa',['xe_id' => $elm->xe_id])}}"  onclick="return confirm('Bạn muốn xóa chứ?')"><i class="far fa-trash-alt"  style="color: red;"></i> Xóa</a>            
                        </div>
                        </div>
                        </td>
                        <td scope="row">{{$loop->index +1 }}</td>
                        <td>{{$elm->TenXe}}</td>
                        @foreach($list_hang_xe as $hang_xe)
                            @if( $elm->hangxe_id == $hang_xe->hangxe_id)
                                <td>{{$hang_xe->TenHangXe}}</td>                            
                            @endif                          
                        @endforeach

                        @foreach($list_loai_xe as $loai_xe)
                            @if( $elm->loaixe_id == $loai_xe->loaixe_id)
                                <td>Xe {{$loai_xe->SoCho}} chỗ</td>
                            @endif                         
                        @endforeach                   
                        <td>{{$elm->NamSanXuat}}</td>
                        <td>{{$elm->NhienLieu}}</td>
                        <td>{{$elm->DungTich}} m<sup>3</sup></td>
                        <td>{{$elm->GioiHanKm}} km</td>
                        <td><p>{{$elm->MoTa}}</p></td>
                        <td> 
                            <img alt="Giấy tờ xe" width="60" height="60" src="{{ URL::to('/') }}/imgs/{{ $elm->GiayToXe }}"/>
                        </td>
                        <td>
                            <img alt="Hình ảnh xe" width="60" height="60" src="{{ URL::to('/') }}/imgs/{{ $elm->HinhAnh }}"/>
                        </td>
                        
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
<script>
/*
$("#timkiem").validate({
		onfocusout: false,
		onkeyup: false,
		onclick: false,
		rules: {
			"tenxe": {
				required: true				
            },
            "hangxe": {
				required: true				
            },
            "loaixe": {
				required: true				
			}
			
		},
        messages: {
			"tenxe": {
				required: "Bạn chưa nhập tên xe",				
            },
            "hangxe": {
				required: "Bạn chưa chọn hãng xe",				
            },
            "loaixe": {
				required: "Bạn chưa chọn loai xe",				
			}
        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
        error.addClass('invalid-feedback');
        element.closest('.form-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
        $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
        }
    });
*/
    
</script>
@endsection