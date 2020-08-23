@extends('back_end.layouts.left_menu')
@section('section')
 <section class="content mb-5">
    <h2 class="ml-3" style="color:blue">Hệ thống quản trị phần mềm xe tự lái </h1>
 </section>
 <section class="content">
      <div class="container-fluid">
        <div class="row">
        <div class="col-md-6">
            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Hãng xe</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
              <!-- /.card-body -->
            </div>
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>

<table>
  <tr>

  </tr>
</table>

<script>
$().ready(function(){  
    $.ajax({
          url: "{{ route('data') }}",
          type: 'GET',
          dataType: 'json',   
          success: function(data) { 
              var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
              var donutData = {
                labels: [],
                datasets: [
                  {
                    data: [],
                    backgroundColor : ['#8A2BE2','#f56954', '#00a65a','#033106'],
                  }
                ]
              }
              var donutOptions     = {
                maintainAspectRatio : false,
                responsive : true,
              }
              var donutChart = new Chart(donutChartCanvas, {
                type: 'doughnut',
                data: donutData,
                options: donutOptions      
              })                
            $.each(data, function (key, item) {                  
              donutChart.data.labels.push(item.TenHangXe) ;
              donutChart.data.datasets[0].data.push( item.total) ;   
              donutChart.update()
            });
           
          },
          error: function(data){
            console.log(data);
          }
        });
        
       
});
 
   
</script>       
@endsection