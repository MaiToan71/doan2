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
                <h3 class="card-title">Nhập thông tin vi phạm</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <div class="form-group ml-2">
                    <label style="color:blue">Ghi chú :</label>
                    <p>Phạt quá hạn: 10 000 đồng/ ngày</p>
               </div>
              <form  method="post" id="themmoi" role="form" enctype="multipart/form-data">
                    @csrf
                    @foreach($HopDongViPham as $elm)
                    <div class="container">                        
                            <div class="row">
                                <div class="col-sm">
                                    <div class="form-group">
                                        <label >Mã hợp đồng <span style="color:red;">(*)</span>:</label>
                                        <input type="text" class="form-control" disabled name="mahopdong" value="HĐ{{$elm->hopdong_id}}">
                                    </div>
                                    <div class="form-group ">
                                            <label >Ngày hẹn trả: <span style="color:red;">(*)</span>:</label>
                                            <input type="date" class="form-control" disabled id="ngayhentra" value="{{$elm->ThoiGianTraXe}}" >
                                    </div>
                                    <div class="form-group">
                                        <label >Số tiền phạt <span style="color:red;">(Đồng)</span>:</label>
                                        <input type="text" class="form-control" disabled name="tienphat" id="tienphat" >
                                    </div>
                                       
                                </div>
                                <div class="col-sm">                                    
                                   
                                    <div class="form-group ">
                                            <label >Ngày hôm nay: <span style="color:red;">(*)</span>:</label>
                                            <input type="text" class="form-control" disabled id="homnay"  value=" {{date('m/d/Y')}}" >
                                    </div>
                                    <div class="form-group">
                                    @foreach($XeHopDong as $xe)
                                        <label >Tiền đã thuê xe <span style="color:red;">(Đồng)</span>:</label>
                                        <input type="text" class="form-control" id="tienthechap" disabled value="{{$xe->GiaThue}}">
                                  
                                    </div>
                                    <div class="form-group">
                                        <label >Ưu đãi %<span style="color:red;">(Đồng)</span>:</label>
                                        <input type="text" class="form-control" id="uudai" disabled value="{{$xe->UuDai}}"> 
                                    </div>
                                    @endforeach 
                                    
                                </div>                               
                            </div>
                            <div class="form-group">
                                        <label >Mô tả lỗi vi phạm <span style="color:red;">(*)</span>:</label>
                                        <textarea class="form-control" name="MoTaLoi" rows="3" id="loivipham">
                                        
                                        </textarea>
                                        <textarea class="form-control" hidden  rows="3" id="quahan" name="quahan">                                      
                                        </textarea>
                                    </div>
                            </div>  
                            <div class="row">
                                <div class="col-sm">
                                    <div class="form-group ">
                                        <button type="submit" class="btn btn-default btn-sm" style="width:100px;" >Ghi lại</button>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-group">
                                        <a type="button" class="btn btn-default btn-sm" style="width:100px;" href="{{route('QuanLyHopDong.hienthilanmot')}}">Quay lại</a>
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
    $(document).ready(function(){
        var uudai = Number($("#uudai").val())/100;
        var homnay  =  $("#homnay").val();
       var hen  =  $("#ngayhentra").val();
       var change = hen.split("-").join("/");
       var tienTC =  $("#tienthechap").val();   
       var x =(new Date(homnay) - new Date(change))/86400000;
       var tienphat = Number(x)*10000;
       var tongTienPhat =  Number(tienTC)-Number(tienTC)*uudai+ Number(tienphat);
   
       var fomatTien = tongTienPhat.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.');
       var fomatTienPhat =  tienphat.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.');
       
       if(x < 0){
            $("#tienphat").val("Không có tiền phạt");
       }else{
             $("#tienphat").attr("value", `${fomatTienPhat}`);             
            $("#loivipham").val(`Tổng tiền hợp đồng của bạn là ${fomatTien} đồng vì đã quá hạn ${x} ngày`);
            $("#quahan").val(tienphat);
       }
    
});
        
    
</script>
@endsection