@extends('admin.layouts.app')

@section('title')
    Tableau de bord du DGAE
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-8">
            <h1 class="m-0 text-dark">Nombre d'etudiant en dette par niveau</h1>
            </div><!-- /.col -->
            <div class="col-sm-4">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active"><a href="#">Tableau de bord</a></li>
            </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-4">
                  <div class="info-box mb-3">
                    <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>
      
                    <div class="info-box-content">
                      <span class="info-box-text">Licence 1</span>
                      <span class="info-box-number">{{ $endettes_l1 }}</span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                  <div class="info-box mb-3">
                    <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>
      
                    <div class="info-box-content">
                      <span class="info-box-text">Licence 2</span>
                      <span class="info-box-number">{{ count($endettes_l2) }}</span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                  <div class="info-box mb-3">
                    <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>
      
                    <div class="info-box-content">
                      <span class="info-box-text">Licence 3</span>
                      <span class="info-box-number">{{ count($endettes_l3) }}</span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- /.col -->
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Etudiants qui valide sans dettes</h3>
    
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                      </button>
                      <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="chartjs-size-monitor">
                      <div class="chartjs-size-monitor-expand">
                        <div class=""></div>
                      </div>
                      <div class="chartjs-size-monitor-shrink">
                        <div class=""></div>
                        </div>
                    </div>
                    <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 444px;" width="666" height="375" class="chartjs-render-monitor"></canvas>
                  </div>
                  <!-- /.card-body -->
                </div>
              </div>
              <div class="col-md-6">
                <div class="card card-primary card-outline">
                  <div class="card-header">
                    <h3 class="card-title">
                      <i class="far fa-chart-bar"></i>
                      Bar Chart
                    </h3>
    
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                      </button>
                      <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                      </button>
                    </div>
                  </div>
                  <div class="card-body">
                    <div id="bar-chart" style="height: 300px; padding: 0px; position: relative;"><canvas class="flot-base" width="665" height="450" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 443.667px; height: 300px;"></canvas><canvas class="flot-overlay" width="665" height="450" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 443.667px; height: 300px;"></canvas><div class="flot-svg" style="position: absolute; top: 0px; left: 0px; height: 100%; width: 100%; pointer-events: none;"><svg style="width: 100%; height: 100%;"><g class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px;"><text x="89.1075568181818" y="293.6640625" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">February</text><text x="166.65141477272726" y="293.6640625" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">March</text><text x="240.8983977272727" y="293.6640625" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">April</text><text x="311.34850568181815" y="293.6640625" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">May</text><text x="24.04026136363636" y="293.6640625" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">January</text><text x="379.0251761363636" y="293.6640625" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">June</text></g><g class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px;"><text x="9.671875" y="267.3359375" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">0</text><text x="9.671875" y="204.5859375" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">5</text><text x="1" y="16.3359375" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">20</text><text x="1" y="141.8359375" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">10</text><text x="1" y="79.0859375" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">15</text></g></svg></div></div>
                  </div>
                  <!-- /.card-body-->
                </div>
              </div>
            </div>
        </div>
    </section>
@endsection

@section('chart')
<script>
  $(function(){
    //-------------
    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    var donutData        = {
      labels: [
          'Licence 1', 
          'Licence 2',
          'Licence 3',
      ],
      datasets: [
        {
          data: [25,18,10],
          backgroundColor : ['#f56954', '#00a65a', '#f39c12'],
        }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var donutChart = new Chart(donutChartCanvas, {
      type: 'doughnut',
      data: donutData,
      options: donutOptions      
    })

    

  })

</script>
<script>
  $(function(){
     /*
     * BAR CHART
     * ---------
     */

     var bar_data = {
      data : [[1,10], [2,8], [3,4], [4,13], [5,17], [6,9]],
      bars: { show: true }
    }
    $.plot('#bar-chart', [bar_data], {
      grid  : {
        borderWidth: 1,
        borderColor: '#f3f3f3',
        tickColor  : '#f3f3f3'
      },
      series: {
         bars: {
          show: true, barWidth: 0.5, align: 'center',
        },
      },
      colors: ['#3c8dbc'],
      xaxis : {
        ticks: [[1,'January'], [2,'February'], [3,'March'], [4,'April'], [5,'May'], [6,'June']]
      }
    })
    /* END BAR CHART */
  })
</script>
@endsection