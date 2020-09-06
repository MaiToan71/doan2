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
              <form method="get" id="timkiem" role="form" action="{{route('QuanLyHopDong.TimKiem')}}">
                    @csrf                  
                        <div class="card-body">
                        <div class="row">
                                <div class="col-sm col-md-2 mt-1">
                                  <label for="exampleInputEmail1">Nội dung cần tìm<span style="color:red;">(*)</span>:</label>
                                </div>
                                <div class="col-sm col-md-6">
                                  <div class="form-group">                               
                                  <input type="text" class="form-control" name="mahopdong" >
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
    <h4 style="margin-left:20px;">Hợp đồng đang hoạt động</h4>
    <hr>   
              <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
            <table class="table table-hover " >
                <thead>
                <tr>
                <th ></th>
                    <th >Mã hợp đồng</th>
                    <th>Tên khách hàng </th>                                  
                    <th>Thời gian hẹn</th>
                    <th >Bắt đầu</th>                   
                    <th >Ngày trả</th>
                    <th >Duyệt</th> 
                                        
                </tr>
            </thead>
            <tbody>                           
                  @foreach($duyetlanmot as $elm)
                  <tr>
                    <td>
                    <div class="dropdown" style="cursor: pointer;"> 
                            <i class="far fa-hand-rock dropdown-toggle" data-toggle="dropdown"></i>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"> 
                            <a type="button" class="dropdown-item btn btn-danger" href="{{route('QuanLyHopDong.ChiTiet',['hopdong_id' => $elm->hopdong_id])}}"><i class="fas fa-pen-alt"></i> Chi Tiết hợp đồng</a>
                            <a type="button" class="dropdown-item btn btn-danger" href="{{route('QuanLyHopDong.QuayLaiDoi',['hopdong_id' => $elm->hopdong_id])}}"><i class="fas fa-pen-alt"></i>Quay lại đợi duyệt</a>
                            <a type="button" class="dropdown-item btn btn-danger" href="{{route('QuanLyHopDong.vipham',['hopdong_id' => $elm->hopdong_id])}}" onclick="return confirm('Bạn xác nhận có vi phạm chứ?')"><i class="fas fa-pen-alt"></i> Có vi phạm</a> 
                            <a type="button" class="dropdown-item btn btn-danger" href="{{route('QuanLyHopDong.ketthuc',['hopdong_id' => $elm->hopdong_id])}}"  onclick="return confirm('Bạn xác nhận duyệt chứ?')"><i class="fas fa-pen-alt"></i> Hoàn thành</a>                                            
                            @if($elm->Duyet ==3)
                            <a type="button" class="dropdown-item btn btn-danger" href="{{route('QuanLyHopDong.formvipham',['hopdong_id' => $elm->hopdong_id])}}" ><i class="fas fa-pen-alt"></i> Ghi nội dung vi phạm</a>           
                           
                            @endif
                           
                        </div>
                        </div>
                    </td>
                    <td>HĐ{{$elm->hopdong_id}}</td>
                    @foreach ($Tens as $Ten)
                      @if($Ten->khachhang_id == $elm->khachhang_id)
                    <td>{{$Ten->Ten}}</td>
                      @endif
                    @endforeach
                    <td>{{$elm->ThoiGianDatTruoc}}</td>              
                    <td>{{$elm->ThoiGianNhanXe}}</td>
                    <td>{{$elm->ThoiGianTraXe}}</td>                 
                    @if($elm->Duyet == 1)                  
                      <td style="color:blue">Đang đợi duyệt</td>
                    @elseif($elm->Duyet == 2) 
                      <td style="color:#006600">Đang hoạt động</td>
                    @elseif($elm->Duyet == 3) 
                      <td style="color:red">Hợp đồng có vi phạm</td>
                    @else
                      <td style="color:blue">Đã thành tiền</td>
                    @endif
                   
                </tr>
                
                @endforeach
            </tbody>
             </table>         
            </div>
            
</div>
</section>
<script>
$("#timkiem").validate({
		onfocusout: false,
		onkeyup: false,
		onclick: false,
		rules: {
			"mahopdong": {
				required: true,
        number: true,
			}
            
			
		},
        messages: {
			"mahopdong": {
				required: "Bạn chưa nhập giá trị",
        number:"Bạn chỉ được nhập số"
			},
           
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