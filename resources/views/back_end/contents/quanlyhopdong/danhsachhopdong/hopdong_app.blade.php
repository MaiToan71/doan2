@extends('back_end.layouts.left_menu')
@section('section')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Danh sách hợp đồng</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Danh sách hợp đồng</a></li>
              <li class="breadcrumb-item active">Toản&ThùyAnh_ver1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        @yield('hopdong')
        <!-- /.row () -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
 @endsection