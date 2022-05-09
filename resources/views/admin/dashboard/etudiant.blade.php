@extends('admin.layouts.app')

@section('title')
    Tableau de bord de l'étudiant
@endsection

@section('content')
    <!-- Content Header (Page header) -->
      <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                <h1 class="m-0 text-dark">Tableau de bord</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard v1</li>
                </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
            </div><!-- /.container-fluid -->
    </div>
        <!-- /.content-header -->
    
        <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="info-box">
              <span class="info-box-icon bg-primary"><i class="fas fa-wave-square"></i></span>
              <div class="info-box-content">
                <span class="info-box-text h4">Quelques statistiques de la classe</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Avancement des Cours</h3>

                            <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                            </div>
                        </div>
                        <div class="card-body"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                            <canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 456px;" width="456" height="250" class="chartjs-render-monitor"></canvas>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>  
                <div class="col-sm-6"> 
                   <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Nombre ayant validé par rapport à l'éffectif</h3>

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
                <div class="chart"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                  <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 456px;" width="456" height="250" class="chartjs-render-monitor"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
                </div>     
                <div class="col-sm-4"> 
                    <div class="info-box">
                    <span class="info-box-icon bg-success"><i class="far fa-flag"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Effectifs de la classe</span>
                        <span class="info-box-number">23 étudiants incrits</span>
                    </div>
                    <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->         
                </div>     
                <div class="col-sm-4"> 
                    <div class="info-box">
                    <span class="info-box-icon bg-warning"><i class="far fa-copy"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Effectifs Filles</span>
                        <span class="info-box-number">07 sur 23</span>
                    </div>
                    <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->         
                </div>
                <div class="col-sm-4"> 
                    <div class="info-box">
                    <span class="info-box-icon bg-danger"><i class="far fa-star"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Cours de l'année</span>
                        <span class="info-box-number">10 cours au total</span>
                    </div>
                    <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->         
                </div>
            </div>  
            <div class="col-sm-12"> <!-- les 4 barres verticale  -->      
                <p class="text-center">
                    <strong>Autres statistiques</strong>
                </p>

                <div class="progress-group">
                    Régularité des étudiants
                    <span class="float-right"><b>80%</b></span>
                    <div class="progress progress-sm">
                    <div class="progress-bar bg-primary" style="width: 80%"></div>
                    </div>
                </div>
                <!-- /.progress-group -->

                <div class="progress-group">
                    Etudiants ayant 1 dette
                    <span class="float-right"><b>12</b>/23</span>
                    <div class="progress progress-sm">
                    <div class="progress-bar bg-danger" style="width: 75%"></div>
                    </div>
                </div>

                <!-- /.progress-group -->
                <div class="progress-group">
                    <span class="progress-text"> Etudiants ayant 2 dettes</span>
                    <span class="float-right"><b>8</b>/23</span>
                    <div class="progress progress-sm">
                    <div class="progress-bar bg-success" style="width: 60%"></div>
                    </div>
                </div>

                <!-- /.progress-group -->
                <div class="progress-group">
                    Etudiants ayant 3 dettes
                    <span class="float-right"><b>6</b>/23</span>
                    <div class="progress progress-sm">
                    <div class="progress-bar bg-warning" style="width: 50%"></div>
                    </div>
                </div>
                <!-- /.progress-group -->
                </div>  <!-- les 4 barres verticale  -->   
            <br>
        </div>
    </section>
   
@endsection
@section('chart')
<script>
  $(function () {
    /* ChartJS
     * Here we will create a few charts using ChartJS
     */

    //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    var pieData        = {
      labels: [
          'Web2',
          'Reseau',
          'Linux',
          'Securité',
          'Systeme d\'exploitation',
      ],
      datasets: [
        {
          data: [700,500,400,600,300,100],
          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc'],
        }
      ]
    }

    var pieOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var pieChart = new Chart(pieChartCanvas, {
      type: 'pie',
      data: pieData,
      options: pieOptions
    })

    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas = $('#barChart').get(0).getContext('2d')
    var barChartData = $.extend(true, {}, {
      labels  : ['Systeme', 'Securité', 'Linux', 'Reseau', 'Web2'],
      datasets: [
        {
          label               : 'Effectif ayant validé',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [28, 48, 40, 19, 36]
        },
        {
          label               : 'Effectif Total',
          backgroundColor     : 'rgba(210, 214, 222, 1)',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [65, 59, 80, 81, 56]
        },
      ]
    })
    var temp0 = {
      labels  : ['Systeme', 'Securité', 'Linux', 'Reseau', 'Web2'],
      datasets: [
        {
          label               : 'Effectif ayant validé',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [28, 48, 40, 19, 36]
        },
        {
          label               : 'Effectif Total',
          backgroundColor     : 'rgba(210, 214, 222, 1)',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [65, 59, 80, 81, 56]
        },
      ]
    }.datasets[0]
    var temp1 = {
      labels  : ['Systeme', 'Securité', 'Linux', 'Reseau', 'Web2'],
      datasets: [
        {
          label               : 'Effectif ayant validé',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [28, 48, 40, 19, 36]
        },
        {
          label               : 'Effectif Total',
          backgroundColor     : 'rgba(210, 214, 222, 1)',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [65, 59, 80, 81, 56]
        },
      ]
    }.datasets[1]
    barChartData.datasets[0] = temp1
    barChartData.datasets[1] = temp0

    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
    }

    var barChart = new Chart(barChartCanvas, {
      type: 'bar',
      data: barChartData,
      options: barChartOptions
    })
    
  })
</script>
@endsection