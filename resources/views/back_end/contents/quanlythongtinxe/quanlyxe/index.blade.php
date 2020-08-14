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
              <!-- /.card-header -->
              <!-- form start -->
              <form method="get" id="timkiem" role="form">
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
                                    <option value="1">...</option>
                                </select>
                            </div>
                            </div>
                            <div class="col-sm">
                            <div class="form-group mr-3"  > 
                                <label >Loại xe <span style="color:red;">(*)</span>:</label>                              
                                <select id="loaixe"  class="form-control" name="loaixe" class="required">
                                    <option value="">Chọn loại xe...</option>
                                    <option value="1"> x chỗ</option>
                                </select>
                            </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-default">Tìm kiếm</button>
                                                  
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
            @foreach($list_data as $elm)
                    <tr>
                        <td> 
                        <div class="dropdown" style="cursor: pointer;"> 
                            <i class="far fa-hand-rock dropdown-toggle" data-toggle="dropdown"></i>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">                       
                        <a type="button" class="dropdown-item btn btn-danger" ><i class="far fa-trash-alt"  style="color: red;"></i> Xóa</a>            
                        </div>
                        </div>
                        </td>
                        <td scope="row">{{$loop->index +1 }}</td>
                        <td>{{$elm->TenXe}}</td>
                        @foreach($list_hang_xe as $hang_xe)
                            @if( $elm->hangxe_id == $hang_xe->hangxe_id)
                                <td>{{$hang_xe->TenHangXe}}</td>
                            @else  
                                <td>null</td> 
                            @endif                          
                        @endforeach
                        @foreach($list_loai_xe as $loai_xe)
                            @if( $elm->loaixe_id == $loai_xe->loaixe_id)
                                <td>Xe {{$loai_xe->SoCho}} chỗ</td>
                            @else  
                                <td>null</td> 
                            @endif                          
                        @endforeach
                       
                        <td>{{$elm->NamSanXuat}}</td>
                        <td>{{$elm->NhienLieu}}</td>
                        <td>{{$elm->DungTich}} m<sup>3</sup></td>
                        <td>{{$elm->GioiHanKm}} km</td>
                        <td><i class="far fa-eye"  style="cursor: pointer;" data-toggle="modal"  data-target="#exampleModal"></i>
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">  
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalScrollableTitle">Nội dung mô tả</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>                            
                                <div class="modal-body">
                                    <p>{{$elm->MoTa}}</p>
                                </div>                               
                                </div>
                            </div></td>
                        <td> <!-- Button trigger modal -->
                        <i class="far fa-eye"  style="cursor: pointer;" data-toggle="modal"  data-target="#exampleModal2"></i>
                            <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                                            <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalScrollableTitle">Hình ảnh giấy tờ xe</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>                             
                                <div class="modal-body">
                                    <img style="width:100%; height=500px;" src="{{URL::asset('imgs/anh1.jpg')}}"/>
                                </div>                               
                                </div>
                            </div>
                       </td>
                        <td>
                        <i class="far fa-eye"  style="cursor: pointer;" data-toggle="modal"  data-target="#exampleModal3"></i>
                            <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content"> 
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalScrollableTitle">Hình ảnh xe</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>                             
                                <div class="modal-body">
                                    <img style="width:100%; height=500px;" src="{{URL::asset('imgs/anh1.jpg')}}"/>
                                </div>                               
                                </div>
                            </div>
                       </td>
                        </td>
                        @if( $elm->TrangThai === 1)
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
    
    
</script>
@endsection