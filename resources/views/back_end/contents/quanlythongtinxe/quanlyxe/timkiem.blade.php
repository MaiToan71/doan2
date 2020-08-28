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
                                <select class="select2bs4" multiple="multiple"name="hangxe" id="hangxe"data-placeholder="Chọn hãng xe"
                                                style="width: 100%;">
                                                @foreach($list_hang_xe as $hang_xe)                                  
                                    <option value="{{$hang_xe->hangxe_id}}">{{$hang_xe->TenHangXe}}</option>
                                @endforeach
                                        </select>
                            </div>
                            </div>
                            <div class="col-sm">
                            <div class="form-group mr-3"  > 
                                <label >Loại xe <span style="color:red;">(*)</span>:</label>                              
                                <select class="select2bs4" multiple="multiple" id="loaixe"  name="loaixe" data-placeholder="Chọn loại xe"
                                                style="width: 100%;">
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
                    <th >Mã xe</th>                   
                    <th>Tên xe </th>                  
                    <th >Hãng xe</th>
                    <th >Loại xe</th>                   
                    <th>Ưu đãi</th>
                    <th>Gía thuê(đồng/ngày)</th>                                    
                    <th>Tình Trạng xe</th>                                    
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
                        <td scope="row">X_{{$elm->xe_id}}</td>
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
                        <td>{{$elm->UuDai}}%</td>
                        <td>{{$elm->GiaThue}}</td>                                                                                  
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
$().ready(function () {
    //Initialize Select2 Elements
    $('.select2').select2();
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
   
  })
</script>
@endsection