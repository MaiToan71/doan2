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
                <h3 class="card-title">Nhập thông tin</h3>
              </div>
      
              <form  method="post" id="sua" role="form" enctype="multipart/form-data">
                    @csrf
                @foreach($thongtin as $xe) 
                    <div class="container">
                            <div class="row">
                                <div class="col-sm">
                                    <div class="form-group">
                                        <label >Hãng xe <span style="color:red;">(*)</span>:</label>
                                        <select id="hangxe" class="form-control" name="hangxe" class="required">
                                        <option value="">Chọn hãng xe...</option>
                                        @foreach($list_hang_xe as $hang_xe)           
                                            <option {{$hang_xe->hangxe_id == $xe->hangxe_id ? 'selected' : '' }} value="{{$hang_xe->hangxe_id}}">{{$hang_xe->TenHangXe}}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label >Hình ảnh <span style="color:red;">(*)</span>:</label>
                                        <input type="file" class="form-control-file" name="hinhanh" >
                                        <img src="{{ URL::to('/') }}/imgs/{{ $xe->HinhAnh }}" width="100" height="100"></img>
                                    </div>
                                    <div class="form-group">
                                        <label >Tên xe<span style="color:red;">(*)</span>:</label>
                                        <input type="text" class="form-control" name="tenxe" value="{{$xe->TenXe}}">
                                    </div>
                                    <div class="form-group">
                                        <label >Năm sản xuất <span style="color:red;">(*)</span>:</label>
                                        <input type="text" class="form-control" name="namsanxuat" value="{{$xe->NamSanXuat}}">
                                    </div>
                                    <div class="form-group">
                                        <label >Nhiên liệu xe: <span style="color:red;">(*)</span>:</label>
                                        <input type="text" class="form-control" name="nhienlieu" value="{{$xe->NhienLieu}}">
                                    </div>
                                    <div class="form-group">
                                        <label > Ưu đãi: <span style="color:red;">(*)</span>:</label>
                                        <input type="text" class="form-control" name="uudai" value="{{$xe->UuDai}}%">
                                    </div>
                                    <div class="form-group form-check">
                                        
                                        <input type="checkbox" checked class="form-check-input" id="exampleCheck1">    
                                        <label class="form-check-label"  >Trạng thái</label>                                   
                                    </div>
                                    <div class="form-group pt-2">
                                        <button type="submit" class="btn btn-default btn-sm" style="width:100px;">Sửa</button>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-group">
                                        <label >Loại xe<span style="color:red;">(*)</span>:</label>
                                        <select class="form-control" name="loaixe">
                                            <option value="">Chọn loại xe...</option>  
                                        @foreach($list_loai_xe as $loai_xe)                                                                               
                                            <option {{$loai_xe->loaixe_id == $xe->loaixe_id ? 'selected' : '' }} value="{{$loai_xe->loaixe_id}}">{{$loai_xe->SoCho}} chỗ</option>   
                                        @endforeach                                                     
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label >Giấy tờ xe <span style="color:red;">(*)</span>:</label>
                                        <input type="file" class="form-control-file" name="giaytoxe">
                                        <img src="{{ URL::to('/') }}/imgs/{{ $xe->GiayToXe }}" width="100" height="100"></img>
                                    </div>
                                    <div class="form-group">
                                        <label >Dung tích <span style="color:red;">(*)</span>:</label>
                                        <input type="text" class="form-control" name="dungtich"  value={{$xe->DungTich}}>
                                    </div>
                                    <div class="form-group">
                                        <label >Giới hạn ngày: <span style="color:red;">(*)</span>:</label>
                                        <input type="text" class="form-control" name="quangduong"  value={{$xe->GioiHanNgay}}>
                                    </div>
                                    <div class="form-group">
                                        <label >Gía thuê: <span style="color:red;">(*)</span>:</label>
                                        <input type="text" class="form-control" name="giathue" value={{$xe->GiaThue}}>
                                    </div>
                                    <div class="form-group">
                                        <label >Mô tả: <span style="color:red;">(*)</span>:</label>
                                        <textarea class="form-control" name="mota" rows="3">{{$xe->MoTa}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <a type="button" class="btn btn-default btn-sm" style="width:100px;" href="{{route('QuanLyXe.index')}}">Quay lại</a>
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
<script>

$("#sua").validate({
		onfocusout: false,
		onkeyup: false,
		onclick: false,
		rules: {
			"hangxe": {
				required: true				
            },          
            "loaixe": {
				required: true				
            },
            "tenxe": {
                required: true,
            },
            "namsanxuat": {
                required: true,
                number: true,
            },
            "nhienlieu": {
                required: true
            },
            "dungtich": {
                required: true,
                number: true
            },
            "quangduong": {
                required: true,
                number: true
            },
            "mota" :{
                required: true
            }
	
		},
        messages: {
			"hangxe": {
				required: "Bạn chưa nhập hãng xe"			
            },            
            "loaixe": {
				required: "Bạn chưa chọn loai xe"				
            },
            "tenxe": {
                required: "Bạn nhập chọn tên xe "
            },
            "namsanxuat": {
                required: "Bạn nhập chọn năm sản xuất ",
                number: "Bạn phải nhập số"
            },
            "nhienlieu": {
                required: "Bạn nhập nhiên liệu "
            },
            
            "dungtich": {
                required: "Bạn chọn dung tích ",
                number:"Bạn phải nhập số"
            },
            "quangduong": {
                required: "Bạn chưa chọn quãng đường ",
                number: "Bạn phải nhập số"
            },
            "mota": {
                required: "Bạn chưa chọn mô tả "
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