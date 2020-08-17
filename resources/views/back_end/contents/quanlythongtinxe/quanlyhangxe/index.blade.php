@extends('back_end.contents.quanlythongtinxe.quanlyhangxe.hang_xe_app')
@section('hangxe')
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
              <form method="post" id="themmoi" role="form">
                    @csrf                  
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên Hãng Xe<span style="color:red;">(*)</span>:</label>
                                <input type="text" class="form-control" name="TenHang" >
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Quốc Gia<span style="color:red;">(*)</span>:</label>
                                <input type="text" class="form-control" name="QuocGia" >
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-default">Thêm mới</button>
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
                <h3 class="card-title">Thông tin</h3>            
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                <thead>
                <tr>
                    <th style="width:100px"></th>
                    <th style="width:200px">STT</th>
                    <th style="width:300px">Tên Hãng Xe</th>
                    <th style="width:300px">Quốc Gia</th>
                    <th style="width:100px">Trạng Thái</th>         
                </tr>
            </thead>
            <tbody>
            @foreach($list_data1 as $elm)
                    <tr>
                        <td> 
                        <div class="dropdown" style="cursor: pointer;"> 
                            <i class="far fa-hand-rock dropdown-toggle" data-toggle="dropdown"></i>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a type="button" class="dropdown-item btn btn-danger" href="{{route('QuanLyHangXe.Thongtinsua',['hangxe_id' => $elm->hangxe_id])}}" ><i class="fas fa-pen-alt"  style="color: blue;"></i> Sửa</a>
                        <a type="button" class="dropdown-item btn btn-danger" href="{{route('QuanLyHangXe.Xoa',['hangxe_id' => $elm->hangxe_id])}}" onclick="return confirm('Bạn muốn xóa chứ?')"><i class="far fa-trash-alt"  style="color: red;"></i> Xóa</a>            
                        </div>
                        </div>
                        </td>
                        <td scope="row">{{$loop->index +1 }}</td>
                        <td>{{$elm->TenHangXe}}</td>
                        <td>{{$elm->QuocGia}}</td>
                        <td>
                        @if( $elm->TrangThai === 1)
                            <td><i class="fas fa-check " style="color:blue"></i></td>
                        @else   
                            <td><i class="fas fa-times" style="color:red"></i></td>
                        @endif
                        </td>
                      
                        
                    </tr>
                @endforeach
            </tbody>
             </table>
            </div>
</div>

<script>
$("#themmoi").validate({
		onfocusout: false,
		onkeyup: false,
		onclick: false,
		rules: {
			"TenHang": {
				required: true,
			},
            "QuocGia": {
                required: true,
            }
			
		},
        messages: {
			"TenHang": {
				required: "Bạn chưa nhập giá trị",
			},
            "QuocGia": {
				required: "Bạn chưa nhập giá trị",
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