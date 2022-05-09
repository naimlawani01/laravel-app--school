@extends('admin.layouts.app')

@section('title')
    Tableau de bord de l'admin
@endsection

@section('content')
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
              <div class="row">
                @foreach ($matieres as $matiere)
                <div class="col-12 col-sm-6 col-md-3">
                  <div class="info-box">
                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>
      
                    <div class="info-box-content">
                      <span class="info-box-text">{{$matiere->nomMat}}</span>
                        <small></small>
                      </span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                @endforeach
                    <!-- /.col -->
                </div>
                <div class="row">
                  @foreach ($matieres as $matiere)
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header border-0">
                              <div class="d-flex justify-content-between">
                                <h3 class="card-title">{{$matiere->nomMat}}</h3>
                              </div>
                            </div>
                            <div class="card-body">
                              
                                  
                              <canvas id="myChart{{$matiere->nomMat}}"></canvas>
                              <script>
                                var ctx = document.getElementById('myChart{{$matiere->nomMat}}').getContext('2d');
                                var chart = new Chart(ctx, {
                                    // The type of chart we want to create
                                    type: 'line',
                                
                                    // The data for our dataset
                                    data: {
                                        labels: ['Evaluation1', 'Evaluation2', 'Evaluation3'],
                                        datasets: [{
                                            label: 'Le nomnbre d\'etudiant ayant la moyenne par évaluation ',
                                            backgroundColor: 'rgb(255, 99, 132)',
                                            borderColor: 'rgb(255, 99, 132)',
                                            data: {{json_encode ($tabNombre[$matiere->nomMat])}}
                                        }]
                                    },
                                
                                    // Configuration options go here
                                    options: {}
                                });
                              </script>                              
                              
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
@endsection