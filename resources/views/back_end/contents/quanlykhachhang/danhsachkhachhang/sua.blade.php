@extends('back_end.contents.quanlykhachhang.danhsachkhachhang.khachhang_app')
@section('khachhang')
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
                @foreach($list_cust as $elm) 
                    <div class="container" style="margin-top:15px;">
                            <div class="row">
                                <div class="col-sm">
                                    <div class="form-group">
                                        <label>Họ Tên Khách Hàng<span style="color:red;">(*)</span>:</label>
                                        <input type="text" class="form-control" name="Ten" value="{{$elm->Ten}}">
                                    </div>
                                    <div class="form-group">
                                        <label >Email<span style="color:red;">(*)</span>:</label>
                                        <input type="text" class="form-control" name="Email" value="{{$elm->Email}}">
                                    </div>
                                    <div class="form-group">
                                    <label >Giới tính <span style="color:red;">(*)</span>:</label>
                                    <br>
                                        <select class="form-control" name="GioiTinh">
                                            <option value="">Chọn.....</option>
                                            @if($elm->GioiTinh==0)
                                            <option value="0" selected>Nam</option>
                                            <option value="1" >Nữ</option>
                                            @else
                                            <option value="1" selected>Nữ</option>
                                            <option value="0" >Nam</option>                       
                                            @endif
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Giấy Phép Lái Xe<span style="color:red;">(*)</span>:</label>
                                        <input type="file" class="form-control-file" name="GiayPhepLaiXe" >
                                        <img src="{{ URL::to('/') }}/imgs/{{ $elm->GiayPhepLaiXe}}" width="100" height="100"></img>
                                    </div>
                                    <div class="form-group">
                                        <label>CMND<span style="color:red;">(*)</span>:</label>
                                        <input type="file" class="form-control-file" name="CMND" >
                                        <img src="{{ URL::to('/') }}/imgs/{{ $elm->CMND}}" width="100" height="100"></img>
                                    </div>
                                    <div class="form-group pt-2" style="margin-top:43px;">
                                        <button type="submit" class="btn btn-default btn-sm" style="width:100px;margin-right:15px;">Sửa</button>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-group">
                                        <label >Địa Chỉ<span style="color:red;">(*)</span>:</label>
                                        <input type="text" class="form-control" name="DiaChi"  value={{$elm->DiaChi}}>
                                    </div>
                                    <div class="form-group">
                                        <label >Mật Khẩu<span style="color:red;">(*)</span>:</label>
                                        <input type="password" class="form-control" name="MatKhau" value="{{$elm->MatKhau}}">
                                    </div> 
                                    <div class="form-group">
                                        <label>Số Điện Thoại<span style="color:red;">(*)</span>:</label>
                                        <input type="text" class="form-control" name="SoDienThoai"  value={{$elm->SoDienThoai}}>
                                    </div>
                                    <div class="form-group">
                                        <label >Ngày Sinh<span style="color:red;">(*)</span>:</label>
                                        <input type="date" class="form-control" name="NgaySinh"  value={{$elm->NgaySinh}}>
                                    </div>  
                                    <div class="form-group" style="margin-top:110px;">
                                        <label>Hộ Khẩu<span style="color:red;">(*)</span>:</label>
                                        <input type="file" class="form-control-file" name="HoKhau" >
                                        <img src="{{ URL::to('/') }}/imgs/{{ $elm->HoKhau}}" width="100" height="100"></img>
                                    </div>                   
                                    <div class="form-group pt-2" style="margin-top:43px;">
                                        <a type="button" class="btn btn-default btn-sm" style="width:100px;" href="{{route('QuanLyKhachHang.index')}}">Quay lại</a>
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

// $("#sua").validate({
// 		onfocusout: false,
// 		onkeyup: false,
// 		onclick: false,
// 		rules: {
// 			"Ten": {
// 				required: true				
//             },          
//             "Email": {
// 				required: true				
//             },
//             "MatKhau": {
//                 required: true,
//             },
//             "SoDienThoai": {
//                 required: true,
//                 number: true,
//             },
//             "DiaChi": {
//                 required: true
//             },
//             "NgaySinh": {
//                 required: true
//             },
//             "GioiTinh": {
//                 required: true            },
            // "mota" :{
            //     required: true
            // }
	
		},
        // messages: {
		// 	"Ten": {
		// 		required: "Bạn chưa nhập họ tên"			
        //     },            
        //     "Email": {
		// 		required: "Bạn chưa nhập email"				
        //     },
        //     "MatKhau": {
        //         required: "Bạn nhập nhập mật khẩu"
        //     },
        //     "namsanxuat": {
        //         required: "Bạn nhập chọn năm sản xuất ",
        //         number: "Bạn phải nhập số"
        //     },
        //     "nhienlieu": {
        //         required: "Bạn nhập nhiên liệu "
        //     },
            
        //     "dungtich": {
        //         required: "Bạn chọn dung tích ",
        //         number:"Bạn phải nhập số"
        //     },
        //     "quangduong": {
        //         required: "Bạn chưa chọn quãng đường ",
        //         number: "Bạn phải nhập số"
        //     },
        //     "mota": {
        //         required: "Bạn chưa chọn mô tả "
        //     }
            
        // },
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