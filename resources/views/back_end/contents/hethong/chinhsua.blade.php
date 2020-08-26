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
                <h3 class="card-title">Nhập thông tin</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form  method="post" id="themmoiform" role="form" >
                    @csrf
                    @foreach($list_data as $data)
                    @if(session('admin_id') == $data->admin_id)
                    <div class="container">
                            <div class="row">
                            
                                <div class="col-sm">
                                <input hidden type="text" value="{{session('admin_id')}}" name="admin_id">
                                    <div class="form-group">
                                        <label >E-mail <span style="color:red;">(*)</span>:</label>
                                        <input type="email" class="form-control"  name="email" value="{{$data->email}}">                                   
                                    </div>
                                    <div class="form-group">
                                        <label >Họ tên <span style="color:red;">(*)</span>:</label>
                                        <input type="text" class="form-control"  name="hoten" value="{{$data->HoTen}}">
                                    </div>
                                    <div class="form-group">
                                        <label >Ngày sinh <span style="color:red;">(*)</span>:</label>
                                        <input type="date" class="form-control"  name="ngaysinh" value="{{$data->NgaySinh}}">
                                    </div>
                                    <div class="form-group">
                                        <label >Giới tính <span style="color:red;">(*)</span>:</label>
                                        <select class="form-control"  name="gioitinh">
                                            <option value="">Chọn.....</option>
                                            @if($data->GioiTinh==0)
                                            <option value="0" selected>Nam</option>
                                            <option value="1" >Nữ</option>
                                            @else
                                            <option value="0" >Nam</option>
                                            <option value="1" selected>Nữ</option>                       
                                            @endif
                                        </select>
                                    </div>
                                   <div class="d-flex">
                                    <div class="form-group mr-5">
                                        <button type="submit" class="btn btn-default btn-sm" style="width:100px;" >Sửa</button>
                                    </div>
                                    <div class="form-group">
                                        <a type="button" class="btn btn-default btn-sm" style="width:100px;" href="{{route('hethong')}}">Quay lại</a>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-group">
                                        <label >Mật khẩu <span style="color:red;">(*)</span>:</label>
                                        <input type="password"  class="form-control" name="matkhau" value="{{$data->MatKhau}}">                                       
                                    </div>
                                    <div class="form-group">
                                        <label >Số điện thoại <span style="color:red;">(*)</span>:</label>
                                        <input type="text"  class="form-control" name="sodienthoai" value="{{$data->SoDienThoai}}">
                                    </div>
                                    <div class="form-group">
                                        <label >Địa chỉ <span style="color:red;">(*)</span>:</label>
                                        <input type="text"  class="form-control" name="diachi" value="{{$data->DiaChi}}">
                                    </div>
                                                             
                                   
                                </div>                               
                            </div>
                           
                            </div>                         
                        </div>
                        @endif
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
$("#themmoiform").validate({
		onfocusout: false,
		onkeyup: false,
		onclick: false,
		rules: {
			"email": {
				required: true				
            },
            "hoten": {
				required: true				
            },
            "ngaysinh": {
				required: true				
			},
            "gioitinh": {
                required: true
            },
            "matkhau": {
                required: true
            },
            "sodienthoai": {
                required: true,
                number: true
            },
            "diachi": {
                required: true,
                
            },
            "quyen": {
                required: true
            }
			
		},
        messages: {
			"email": {
				required: "Bạn chưa nhập email",				
            },
            "hoten": {
				required: "Bạn chưa họ tên",				
            },
            "ngaysinh": {
				required: "Bạn chưa chọn ngày sinh",				
			},
            "gioitinh": {
				required: "Bạn chưa chọn giới tính",				
			},
            "matkhau": {
				required: "Bạn chưa nhập mật khẩu",				
			},
            "sodienthoai": {
				required: "Bạn chưa nhập số điện thoại",
                number: "Bạn chỉ được nhập số"				
			},
            "diachi": {
				required: "Bạn chưa nhập địa chỉ",				
			},
            "quyen": {
				required: "Bạn chưa chọn quyền"				
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