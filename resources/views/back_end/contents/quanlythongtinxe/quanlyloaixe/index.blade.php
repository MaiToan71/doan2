@extends('back_end.contents.quanlythongtinxe.quanlyloaixe.loai_xe_app')
@section('hethong')
<div class="container ">
<form >
<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <label for="exampleInputEmail1">Số chỗ</label>
            <input type="email" class="form-control" id="exampleInputEmail1" >
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default">Thêm mới</button>
        </div>
        
    </div>
    <div class="col-sm-6">
           
    </div>

   
</div>
 
</form>
<table class="table table-bordered" style="width:800px">
    <thead>
        <tr>
            <th style="width:100px"></th>
            <th style="width:200px">STT</th>
            <th style="width:300px">Số chỗ</th>
            <th style="width:100px">Trạng thái</th>         
        </tr>
    </thead>
    <tbody>
    @foreach($list_data as $elm)
        <tr>
            <td>1</td>
            <td scope="row">{{$loop->index +1 }}</td>
            <td>{{$elm->SoCho}}</td>
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
@endsection