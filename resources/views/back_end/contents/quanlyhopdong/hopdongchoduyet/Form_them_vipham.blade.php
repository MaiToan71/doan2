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
                    <label style="color:blue">Ghi chú :
                    <span style="color:red;">Phạt quá hạn: </span>
                    </label>
                    <br>
                    <span>1,000,000 đồng/ngày </span>
                    và
                    <span>20,000 đồng/giờ</span>
               </div>
              <form  method="post" id="themmoi" role="form" enctype="multipart/form-data">
                    @csrf     
                    @foreach($HopDongViPham as $elm)          
                    <div class="container">                        
                            <div class="row">
                                <div class="col-sm">
                                    <div class="form-group">
                                        <label >Mã hợp đồng <span style="color:red;">(*)</span>:</label>
                                        <input type="text" class="form-control" disabled  name="mahopdong" value="HĐ{{$elm->hopdong_id}}" >
                                    </div> 
                                    <div class="form-group">
                                        <label >Thời gian trả xe theo hợp đồng <span style="color:red;">(*)</span>:</label>
                                        <input type="datetime" class="form-control"   name="thoigiantraxe"  value="{{$elm->ThoiGianTraXe}}">
                                    </div> 
                                   
                                                                                                        
                                </div>
                                <div class="col-sm">
                                <div class="form-group">
                                        <label >Thời gian trả xe thực tế <span style="color:red;">(*)</span>:</label>
                                        <input type="datetime-local" class="form-control"  name="thucte" >
                                    </div> 
                                <div class="form-group">
                                        <label >Tiền quá hạn <span style="color:red;">(*)</span>:</label>
                                        <input type="text" class="form-control"  name="quahan" value="{{$elm->TienQuaHan}}">
                                </div>
                                 </div>
                                                 
                            </div>
                            <div class="row">
                            <div class="col-sm">
                                <div class="form-group">
                                            <label >Tổng tiền hợp đồng <span style="color:red;">(*)</span>:</label>
                                          
                                            <input type="text" class="form-control"  name="tongtien"  value="{{$elm->TongTien}}">
                                </div> 
                               
                                </div> 
                                
                           </div>
                           <div class="form-group ">
                                        <button type="submit" class="btn btn-default btn-sm" style="width:100px;" >Ghi lại</button>
                                        <a type="button" class="btn btn-default btn-sm" style="width:100px;" href="{{route('QuanLyHopDong.hienthilanmot')}}">Quay lại</a>
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
            $("#tongtien").attr("value", `${Number(tienTC)-Number(tienTC)*uudai}`); 
       }else{
        $("#tongtien").attr("value", `${tongTienPhat}`); 
             $("#tienphat").attr("value", `${fomatTienPhat}`);             
            $("#loivipham").val(`Tổng tiền hợp đồng của bạn là ${fomatTien} đồng vì đã quá hạn ${x} ngày`);
            $("#quahan").val(tienphat);
       }
    
});
        
    
</script>
@endsection