@extends('admin.layouts.app')

@section('title')
    Tableau de bord de l'étudiant
@endsection

@section('content')
   <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Widgets</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Widgets</li>
            </ol>
        </div>
        </div>
    </div><!-- /.container-fluid -->
        <!-- Main content -->

    <section class="content">
      <div class="container-fluid">       
        <div class="row">          
          <div class="col-sm-9">
            <div class="row">
                <div style="width:99%;">
                    <div class="callout callout-info col-sm-12">
                        <h4>  Détails du cours</h4>
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Détails</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <strong><i class="fas fa-book mr-1"></i> Nom du Cours</strong>  
                            <p class="text-muted text-uppercase">
                                {{$detailCours->nomMat}}
                            </p>
                            <hr>
                            <strong><i class="fas fa-map-marker-alt mr-1"></i> Niveau </strong>
                            <p class="text-muted">Semestre {{$detailCours->numSemestre}}</p>                              
                            <hr>
                            <strong><i class="far fa-file-alt mr-1"></i> Description</strong>
                            <p class=" text-small">{{$detailCours->description}}</p>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div> 
                <div class="col-sm-5"> <!--profil professeur-->
                    <div class="col-12 col-sm-12 d-flex align-items-stretch">
                    <div class="card bg-light">
                        <div class="card-header text-muted border-bottom-0">
                            <p> Professeur chargé du cours</p>
                        </div>
                        <div class="card-body pt-0">
                        <div class="row">
                            <div class="col-7">
                                <h2 class="lead"><b>{{$detailCours->nom." ".$detailCours->prenom}}</b></h2>
                                <p class="text-muted text-sm">Enseignant au <b>Centre Informatique</b><br/>
                                     de l'<b>Université Gamal Abdel Nasser de Conakry (UGANC)</b>.
                                </p>
                                <ul class="ml-4 mb-0 fa-ul text-muted">
                                    <li class="small"><span class="fa-li"><i class="fas fa-lg fa-envelope"></i></span> Email: {{$detailCours->email}}</li>
                                    <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone : {{$detailCours->telephone}} </li>
                                </ul>                               
                            </div>
                            <div class="col-5 text-center">
                            <img src="../../dist/img/img_prof.jpg" alt="user-avatar" class="img-circle img-fluid">
                            </div>
                        </div>
                        </div>
                        <div class="card-footer">
                        <div class="text-right">
                            <a href="#" class="btn btn-sm bg-teal">
                            <i class="fas fa-comments"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-primary">
                            <i class="fas fa-user"></i> Voir Profil
                            </a>
                        </div>
                        </div>
                    </div>
                    </div>
                </div> <!--profil professeur-->
            </div> 
            <div class="row"> <!--Autres matieres-->
              <div class="callout callout-info col-sm-12">
                <h4>  Autres cours</h4>
              </div>
                @if (count($matieres_suivies)>0)
                  @foreach($matieres_suivies as $matiere)
                    @if ($matiere->nomMat != $detailCours->nomMat) <!--$detailCours->nomMat est le cours cliqué pour voir les détails-->
                       <div class="col-sm-6 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                          <div class="inner">
                            <h5 class="text-uppercase">{{$matiere->nomMat}}</h5> <!-- Afficher le nom de la matiere -->
                              @php
                              $nb = 100;
                                if(strlen($matiere->description) > $nb){ $matiere->description = substr($matiere->description, 0, $nb);}
                              @endphp
                            <p><strong> Prof:</strong> {{$matiere->nom." ".$matiere->prenom}} </.p> 
                            <p>{{$matiere->description}} </p>  <!-- /.Afficher le nom du chargé du cours -->
                          </div>
                          <div class="icon">
                            <i class="ion ion-bag"></i>
                          </div>
                          <a href="{{route('details', $matiere->nomMat) }}" class="small-box-footer"> Afficher les détails <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                      </div>
                    @endif
                  @endforeach
                @endif
             </div>
          </div><!--Autres matieres-->
          <div class="col-sm-3"> <!--bloc latéral, calendrier et autre-->
              <div class="row"> 
                <div class="callout callout-danger col-sm-12">
                <h4> Outils & Annonces</h4>
              </div>          
              <div class='col-sm-12'> <!-- le calendrier  -->  
                <div class="card bg-gradient-success">
                    <div class="card-header border-0 ui-sortable-handle" style="cursor: move;">

                      <h3 class="card-title">
                        <i class="far fa-calendar-alt"></i>
                        Calendrier
                      </h3>
                      <!-- tools card -->
                      <div class="card-tools">
                        <!-- button with a dropdown -->
                        <div class="btn-group">
                          <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52">
                            <i class="fas fa-bars"></i>
                          </button>
                          <div class="dropdown-menu" role="menu">
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
                    <div class="card-body pt-0">
                      <!--The calendar -->
                      <div id="calendar" style="width: 100%"><div class="bootstrap-datetimepicker-widget usetwentyfour"><ul class="list-unstyled"><li class="show"><div class="datepicker"><div class="datepicker-days" style=""><table class="table table-sm"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Month"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Month">September 2020</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Month"></span></th></tr><tr><th class="dow">Su</th><th class="dow">Mo</th><th class="dow">Tu</th><th class="dow">We</th><th class="dow">Th</th><th class="dow">Fr</th><th class="dow">Sa</th></tr></thead><tbody><tr><td data-action="selectDay" data-day="08/30/2020" class="day old weekend">30</td><td data-action="selectDay" data-day="08/31/2020" class="day old">31</td><td data-action="selectDay" data-day="09/01/2020" class="day">1</td><td data-action="selectDay" data-day="09/02/2020" class="day">2</td><td data-action="selectDay" data-day="09/03/2020" class="day">3</td><td data-action="selectDay" data-day="09/04/2020" class="day">4</td><td data-action="selectDay" data-day="09/05/2020" class="day weekend">5</td></tr><tr><td data-action="selectDay" data-day="09/06/2020" class="day weekend">6</td><td data-action="selectDay" data-day="09/07/2020" class="day">7</td><td data-action="selectDay" data-day="09/08/2020" class="day">8</td><td data-action="selectDay" data-day="09/09/2020" class="day">9</td><td data-action="selectDay" data-day="09/10/2020" class="day">10</td><td data-action="selectDay" data-day="09/11/2020" class="day">11</td><td data-action="selectDay" data-day="09/12/2020" class="day weekend">12</td></tr><tr><td data-action="selectDay" data-day="09/13/2020" class="day weekend">13</td><td data-action="selectDay" data-day="09/14/2020" class="day">14</td><td data-action="selectDay" data-day="09/15/2020" class="day">15</td><td data-action="selectDay" data-day="09/16/2020" class="day">16</td><td data-action="selectDay" data-day="09/17/2020" class="day active today">17</td><td data-action="selectDay" data-day="09/18/2020" class="day">18</td><td data-action="selectDay" data-day="09/19/2020" class="day weekend">19</td></tr><tr><td data-action="selectDay" data-day="09/20/2020" class="day weekend">20</td><td data-action="selectDay" data-day="09/21/2020" class="day">21</td><td data-action="selectDay" data-day="09/22/2020" class="day">22</td><td data-action="selectDay" data-day="09/23/2020" class="day">23</td><td data-action="selectDay" data-day="09/24/2020" class="day">24</td><td data-action="selectDay" data-day="09/25/2020" class="day">25</td><td data-action="selectDay" data-day="09/26/2020" class="day weekend">26</td></tr><tr><td data-action="selectDay" data-day="09/27/2020" class="day weekend">27</td><td data-action="selectDay" data-day="09/28/2020" class="day">28</td><td data-action="selectDay" data-day="09/29/2020" class="day">29</td><td data-action="selectDay" data-day="09/30/2020" class="day">30</td><td data-action="selectDay" data-day="10/01/2020" class="day new">1</td><td data-action="selectDay" data-day="10/02/2020" class="day new">2</td><td data-action="selectDay" data-day="10/03/2020" class="day new weekend">3</td></tr><tr><td data-action="selectDay" data-day="10/04/2020" class="day new weekend">4</td><td data-action="selectDay" data-day="10/05/2020" class="day new">5</td><td data-action="selectDay" data-day="10/06/2020" class="day new">6</td><td data-action="selectDay" data-day="10/07/2020" class="day new">7</td><td data-action="selectDay" data-day="10/08/2020" class="day new">8</td><td data-action="selectDay" data-day="10/09/2020" class="day new">9</td><td data-action="selectDay" data-day="10/10/2020" class="day new weekend">10</td></tr></tbody></table></div><div class="datepicker-months" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Year"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Year">2020</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Year"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectMonth" class="month">Jan</span><span data-action="selectMonth" class="month">Feb</span><span data-action="selectMonth" class="month">Mar</span><span data-action="selectMonth" class="month">Apr</span><span data-action="selectMonth" class="month">May</span><span data-action="selectMonth" class="month">Jun</span><span data-action="selectMonth" class="month">Jul</span><span data-action="selectMonth" class="month">Aug</span><span data-action="selectMonth" class="month active">Sep</span><span data-action="selectMonth" class="month">Oct</span><span data-action="selectMonth" class="month">Nov</span><span data-action="selectMonth" class="month">Dec</span></td></tr></tbody></table></div><div class="datepicker-years" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Decade"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Decade">2020-2029</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Decade"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectYear" class="year old">2019</span><span data-action="selectYear" class="year active">2020</span><span data-action="selectYear" class="year">2021</span><span data-action="selectYear" class="year">2022</span><span data-action="selectYear" class="year">2023</span><span data-action="selectYear" class="year">2024</span><span data-action="selectYear" class="year">2025</span><span data-action="selectYear" class="year">2026</span><span data-action="selectYear" class="year">2027</span><span data-action="selectYear" class="year">2028</span><span data-action="selectYear" class="year">2029</span><span data-action="selectYear" class="year old">2030</span></td></tr></tbody></table></div><div class="datepicker-decades" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Century"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5">2000-2090</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Century"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectDecade" class="decade old" data-selection="2006">1990</span><span data-action="selectDecade" class="decade" data-selection="2006">2000</span><span data-action="selectDecade" class="decade active" data-selection="2016">2010</span><span data-action="selectDecade" class="decade" data-selection="2026">2020</span><span data-action="selectDecade" class="decade" data-selection="2036">2030</span><span data-action="selectDecade" class="decade" data-selection="2046">2040</span><span data-action="selectDecade" class="decade" data-selection="2056">2050</span><span data-action="selectDecade" class="decade" data-selection="2066">2060</span><span data-action="selectDecade" class="decade" data-selection="2076">2070</span><span data-action="selectDecade" class="decade" data-selection="2086">2080</span><span data-action="selectDecade" class="decade" data-selection="2096">2090</span><span data-action="selectDecade" class="decade old" data-selection="2106">2100</span></td></tr></tbody></table></div></div></li><li class="picker-switch accordion-toggle"></li></ul></div></div>
                    </div>
                    <!-- /.card-body -->
                  </div>
              </div> <!-- le calendrier  -->  
              <div class="col-sm-12"> <!-- le ribon  -->  
                <div class="position-relative p-3 bg-gray" style="height: 180px">
                  <div class="ribbon-wrapper ribbon-xl">
                    <div class="ribbon bg-danger text-xl">
                      PHOTOSHOP
                    </div>
                  </div>
                  Formation en Photoshop <br> Du 20 au 30 septembre <br>
                  <small>Nous organisons une formations</small><br>
                  <small>en photoshop, les inscriptions sont ouvertes</small><br>
                  <small>plus d'infos au 621 62 32 35</small>
                </div>
              </div><!-- le ribon  --> 
              
               <div class="col-sm-12" style="margin-top:20px;"><!-- la newsletter  -->  
                  <div class="card card-info">
                    <div class="card-header">
                      <h3 class="card-title">Souscrire à la newsletter</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form class="form-horizontal">
                      <div class="card-body">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-sm-12 col-form-label">Adresse Email</label>
                          <div class="col-sm-12">
                            <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputPassword4" class="col-sm-12 col-form-label">Nom d'utilisateur</label>
                          <div class="col-sm-12">
                            <input type="text" class="form-control" id="inputPassword4" placeholder="Password">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputPassword3" class="col-sm-12 col-form-label">Mot de passe</label>
                          <div class="col-sm-12">
                            <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                          </div>
                        </div>                   
                        <div class="form-group">
                          <div class="offset-sm-2 col-sm-12">
                            <div class="form-check">
                              <input type="checkbox" class="form-check-input" id="exampleCheck2">
                              <label class="form-check-label" for="exampleCheck2">Se souvenir de moi</label>
                            </div>
                          </div>
                        </div>
                      </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                      <button type="submit" class="btn btn-info">Souscrire</button>
                      <!--button type="submit" class="btn btn-default float-right">Cancel</!--button-->
                    </div>
                    <!-- /.card-footer -->
                  </form>
                </div><!-- la newsletter  -->  
              </div>                
          </div><!--bloc latéral, calendrier et autre-->
      </div>
    </div>
</section>
@endsection