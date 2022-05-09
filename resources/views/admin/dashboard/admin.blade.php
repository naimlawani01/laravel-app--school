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
                <li class="breadcrumb-item"><a href="#">Acceuil</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
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
          <div class="row">
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>{{ $counts['etudiantCount'] }}</h3>
  
                  <p>Etudiant</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="{{ route('etudiant.index') }}" class="small-box-footer">voir plus <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3>{{ $counts['professeurCount'] }}<sup style="font-size: 20px"></sup></h3>
  
                  <p>professeurs</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="{{ route('professeur.index') }}" class="small-box-footer">voir plus <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3>{{ $counts['programmeCount'] }}</h3>
  
                  <p>Programmes</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="{{ route('programme.index') }}" class="small-box-footer">voir plus <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                  <h3>{{ $counts['inscriptionCount'] }}</h3>
  
                  <p>Inscription</p>
                </div>
                <div class="icon">
                  <i class="far fa-image"></i>
                </div>
                <a href="{{ route('inscription.index') }}" class="small-box-footer">voir plus <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-gradient-success">
                <div class="inner">
                  <h3>{{ $counts['departementCount'] }}</h3>
  
                  <p>Departements</p>
                </div>
                <div class="icon">
                  <i class="far fa-image"></i>
                </div>
                <a href="{{ route('inscription.index') }}" class="small-box-footer">voir plus <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                  <h3>{{ $counts['matiereCount'] }}</h3>
  
                  <p>Matiere</p>
                </div>
                <div class="icon">
                  <i class="far fa-image"></i>
                </div>
                <a href="{{ route('inscription.index') }}" class="small-box-footer">voir plus <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3>{{ $counts['inscriptionCount'] }}</h3>
  
                  <p>Semestre</p>
                </div>
                <div class="icon">
                  <i class="far fa-image"></i>
                </div>
                <a href="{{ route('inscription.index') }}" class="small-box-footer">voir plus <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-primary">
                <div class="inner">
                  <h3>{{ $counts['articleCount'] }}</h3>
  
                  <p>Articles</p>
                </div>
                <div class="icon">
                  <i class="far fa-image"></i>
                </div>
                <a href="{{ route('post.index') }}" class="small-box-footer">voir plus <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
          </div>
          <!-- /.row -->
          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <section class="col-lg-7 connectedSortable">
              <!-- Custom tabs (Charts with tabs)-->
              <!-- BAR CHART --
              <!-- /.card -->
  
              <div class="card-body">
                              
                                  
                <canvas id="myChart"></canvas>
                <script>
                  var ctx = document.getElementById('myChart').getContext('2d');
                  var chart = new Chart(ctx, {
                      // The type of chart we want to create
                      type: 'bar',
                  
                      // The data for our dataset
                      data: {
                          labels: <?= $nationalities ?>,
                          datasets: [{
                              label: 'Les etudiants par pays ',
                              backgroundColor: 'rgb(255, 99, 132)',
                              borderColor: 'rgb(255, 99, 132)',
                              data: {{ json_encode($etudiantsPerNationality) }}
                          }]
                      },
                  
                      // Configuration options go here
                      options: {}
                  });
                </script>                              
                
              </div>
              <!--/.direct-chat -->
  
              <!-- TO DO List -->
              
              <!-- /.card -->
            </section>
            <!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-5 connectedSortable">
              <div class="card bg-gradient-success" style="position: relative; left: 0px; top: 0px;">
                <div class="card-header border-0 ui-sortable-handle" style="cursor: move;">
  
                  <h3 class="card-title">
                    <i class="far fa-calendar-alt"></i>
                    Calendar
                  </h3>
                  <!-- tools card -->
                  <div class="card-tools">
                    <!-- button with a dropdown -->
                    <div class="btn-group">
                      <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                        <i class="fas fa-bars"></i></button>
                      <div class="dropdown-menu float-right" role="menu">
                        <a href="#" class="dropdown-item">Add new event</a>
                        <a href="#" class="dropdown-item">Clear events</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">View calendar</a>
                      </div>
                    </div>
                    <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                  <!-- /. tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body pt-0" style="display: block;">
                  <!--The calendar -->
                  <div id="calendar" style="width: 100%"><div class="bootstrap-datetimepicker-widget usetwentyfour"><ul class="list-unstyled"><li class="show"><div class="datepicker"><div class="datepicker-days" style=""><table class="table table-sm"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Month"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Month">September 2020</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Month"></span></th></tr><tr><th class="dow">Dim</th><th class="dow">Lun</th><th class="dow">Mar</th><th class="dow">Mer</th><th class="dow">Jeu</th><th class="dow">Ven</th><th class="dow">Sam</th></tr></thead><tbody><tr><td data-action="selectDay" data-day="08/30/2020" class="day old weekend">30</td><td data-action="selectDay" data-day="08/31/2020" class="day old">31</td><td data-action="selectDay" data-day="09/01/2020" class="day">1</td><td data-action="selectDay" data-day="09/02/2020" class="day active today">2</td><td data-action="selectDay" data-day="09/03/2020" class="day">3</td><td data-action="selectDay" data-day="09/04/2020" class="day">4</td><td data-action="selectDay" data-day="09/05/2020" class="day weekend">5</td></tr><tr><td data-action="selectDay" data-day="09/06/2020" class="day weekend">6</td><td data-action="selectDay" data-day="09/07/2020" class="day">7</td><td data-action="selectDay" data-day="09/08/2020" class="day">8</td><td data-action="selectDay" data-day="09/09/2020" class="day">9</td><td data-action="selectDay" data-day="09/10/2020" class="day">10</td><td data-action="selectDay" data-day="09/11/2020" class="day">11</td><td data-action="selectDay" data-day="09/12/2020" class="day weekend">12</td></tr><tr><td data-action="selectDay" data-day="09/13/2020" class="day weekend">13</td><td data-action="selectDay" data-day="09/14/2020" class="day">14</td><td data-action="selectDay" data-day="09/15/2020" class="day">15</td><td data-action="selectDay" data-day="09/16/2020" class="day">16</td><td data-action="selectDay" data-day="09/17/2020" class="day">17</td><td data-action="selectDay" data-day="09/18/2020" class="day">18</td><td data-action="selectDay" data-day="09/19/2020" class="day weekend">19</td></tr><tr><td data-action="selectDay" data-day="09/20/2020" class="day weekend">20</td><td data-action="selectDay" data-day="09/21/2020" class="day">21</td><td data-action="selectDay" data-day="09/22/2020" class="day">22</td><td data-action="selectDay" data-day="09/23/2020" class="day">23</td><td data-action="selectDay" data-day="09/24/2020" class="day">24</td><td data-action="selectDay" data-day="09/25/2020" class="day">25</td><td data-action="selectDay" data-day="09/26/2020" class="day weekend">26</td></tr><tr><td data-action="selectDay" data-day="09/27/2020" class="day weekend">27</td><td data-action="selectDay" data-day="09/28/2020" class="day">28</td><td data-action="selectDay" data-day="09/29/2020" class="day">29</td><td data-action="selectDay" data-day="09/30/2020" class="day">30</td><td data-action="selectDay" data-day="10/01/2020" class="day new">1</td><td data-action="selectDay" data-day="10/02/2020" class="day new">2</td><td data-action="selectDay" data-day="10/03/2020" class="day new weekend">3</td></tr><tr><td data-action="selectDay" data-day="10/04/2020" class="day new weekend">4</td><td data-action="selectDay" data-day="10/05/2020" class="day new">5</td><td data-action="selectDay" data-day="10/06/2020" class="day new">6</td><td data-action="selectDay" data-day="10/07/2020" class="day new">7</td><td data-action="selectDay" data-day="10/08/2020" class="day new">8</td><td data-action="selectDay" data-day="10/09/2020" class="day new">9</td><td data-action="selectDay" data-day="10/10/2020" class="day new weekend">10</td></tr></tbody></table></div><div class="datepicker-months" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Year"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Year">2020</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Year"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectMonth" class="month">Jan</span><span data-action="selectMonth" class="month">Feb</span><span data-action="selectMonth" class="month">Mar</span><span data-action="selectMonth" class="month">Apr</span><span data-action="selectMonth" class="month">May</span><span data-action="selectMonth" class="month">Jun</span><span data-action="selectMonth" class="month">Jul</span><span data-action="selectMonth" class="month">Aug</span><span data-action="selectMonth" class="month active">Sep</span><span data-action="selectMonth" class="month">Oct</span><span data-action="selectMonth" class="month">Nov</span><span data-action="selectMonth" class="month">Dec</span></td></tr></tbody></table></div><div class="datepicker-years" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Decade"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Decade">2020-2029</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Decade"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectYear" class="year old">2019</span><span data-action="selectYear" class="year active">2020</span><span data-action="selectYear" class="year">2021</span><span data-action="selectYear" class="year">2022</span><span data-action="selectYear" class="year">2023</span><span data-action="selectYear" class="year">2024</span><span data-action="selectYear" class="year">2025</span><span data-action="selectYear" class="year">2026</span><span data-action="selectYear" class="year">2027</span><span data-action="selectYear" class="year">2028</span><span data-action="selectYear" class="year">2029</span><span data-action="selectYear" class="year old">2030</span></td></tr></tbody></table></div><div class="datepicker-decades" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Century"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5">2000-2090</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Century"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectDecade" class="decade old" data-selection="2006">1990</span><span data-action="selectDecade" class="decade" data-selection="2006">2000</span><span data-action="selectDecade" class="decade active" data-selection="2016">2010</span><span data-action="selectDecade" class="decade" data-selection="2026">2020</span><span data-action="selectDecade" class="decade" data-selection="2036">2030</span><span data-action="selectDecade" class="decade" data-selection="2046">2040</span><span data-action="selectDecade" class="decade" data-selection="2056">2050</span><span data-action="selectDecade" class="decade" data-selection="2066">2060</span><span data-action="selectDecade" class="decade" data-selection="2076">2070</span><span data-action="selectDecade" class="decade" data-selection="2086">2080</span><span data-action="selectDecade" class="decade" data-selection="2096">2090</span><span data-action="selectDecade" class="decade old" data-selection="2106">2100</span></td></tr></tbody></table></div></div></li><li class="picker-switch accordion-toggle"></li></ul></div></div>
                </div>
                <!-- /.card-body -->
              </div>
             <!-- USERS LIST -->
             {{-- <div class="card">
              <div class="card-header">
                <h3 class="card-title">Etudiants à surveiller</h3>
  
                <div class="card-tools">
                  <span class="badge badge-danger">Etudiants à surveiller</span>
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <ul class="users-list clearfix">
                  <li>
                    <img src="dist/img/user1-128x128.jpg" alt="User Image">
                    <a class="users-list-name" href="#">Alexander Pierce</a>
                    <span class="users-list-date">Today</span>
                  </li>
                  <li>
                    <img src="dist/img/user8-128x128.jpg" alt="User Image">
                    <a class="users-list-name" href="#">Norman</a>
                    <span class="users-list-date">Yesterday</span>
                  </li>
                  <li>
                    <img src="dist/img/user7-128x128.jpg" alt="User Image">
                    <a class="users-list-name" href="#">Jane</a>
                    <span class="users-list-date">12 Jan</span>
                  </li>
                  <li>
                    <img src="dist/img/user6-128x128.jpg" alt="User Image">
                    <a class="users-list-name" href="#">John</a>
                    <span class="users-list-date">12 Jan</span>
                  </li>
                  <li>
                    <img src="dist/img/user2-160x160.jpg" alt="User Image">
                    <a class="users-list-name" href="#">Alexander</a>
                    <span class="users-list-date">13 Jan</span>
                  </li>
                  <li>
                    <img src="dist/img/user5-128x128.jpg" alt="User Image">
                    <a class="users-list-name" href="#">Sarah</a>
                    <span class="users-list-date">14 Jan</span>
                  </li>
                  <li>
                    <img src="dist/img/user4-128x128.jpg" alt="User Image">
                    <a class="users-list-name" href="#">Nora</a>
                    <span class="users-list-date">15 Jan</span>
                  </li>
                  <li>
                    <img src="dist/img/user3-128x128.jpg" alt="User Image">
                    <a class="users-list-name" href="#">Nadia</a>
                    <span class="users-list-date">15 Jan</span>
                  </li>
                </ul>
                <!-- /.users-list -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer text-center">
                <a href="javascript::">View All Users</a>
              </div>
              <!-- /.card-footer -->
            </div> --}}
              <!-- /.card -->
  
              <!-- solid sales graph -->
              
              <!-- /.info-box -->
              <!-- /.info-box --
                  <!-- /.row -->
                </div>
                <!-- /.card-footer -->
              </div>
              <!-- /.card -->
      </section>
            <!-- right col -->
            <!-- right col -->
@endsection