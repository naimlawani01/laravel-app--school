@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1>Profile de l'utilisateur</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Profile d'utilisateur</li>
            </ol>
            </div>
        </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- /.col -->
            <div class="col-md-12">
              <div class="card">
                <div class="card-header p-2">
                  <ul class="nav nav-pills">
                    <li class="nav-item"><a class="nav-link active" href="#timeline" data-toggle="tab">Profile</a></li>
                    <li class="nav-item"><a class="nav-link " href="#settings" data-toggle="tab">Paramètre</a></li>
                  </ul>
                </div><!-- /.card-header -->
                <div class="card-body">
                  <div class="tab-content">
                    <!-- /.tab-pane -->
                    <div class="tab-pane active" id="timeline">
                      <!-- The timeline -->
                      <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                          <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle" src="{{ asset("/admin/dist/img/avatar.png") }}" alt="User profile picture">
                          </div>
          
                          <h3 class="profile-username text-center">{{ Auth::user()->name }}</h3>
          
                          <p class="text-muted text-center">
                            @if (Auth::user()->role_id == 1)
                                Administrateur
                            @endif
                            @if (Auth::user()->role_id == 2)
                                Directeur Général Chargé des Etudes 
                            @endif
                            @if (Auth::user()->role_id == 3)
                                Professeur
                            @endif
                            @if (Auth::user()->role_id == 4)
                                Etudiant
                            @endif
                          </p>
          
                          <ul class="list-group list-group-unbordered mb-3 mr-5 ml-5">
                            <li class="list-group-item">
                              <b>Nom et Prénom :</b> <a class="float-right"> @if (Auth::user()->role_id == 4)
                                {{ Auth::user()->etudiant->nom }} {{ Auth::user()->etudiant->prenom }}
                                @else
                                {{ Auth::user()->name }}
                              @endif </a>
                            </li>
                            <li class="list-group-item">
                              <b>Email :</b> <a class="float-right">{{ Auth::user()->email }}</a>
                            </li>
                            @if (Auth::user()->role_id == 4)
                            <li class="list-group-item">
                              <b>Matricule :</b> <a class="float-right">{{ Auth::user()->etudiant->matricule }}</a>
                            </li>
                            <li class="list-group-item">
                              <b>Sexe :</b> <a class="float-right">{{ Auth::user()->etudiant->sexe }}</a>
                            </li>
                            <li class="list-group-item">
                              <b>Date de naissance :</b> <a class="float-right">{{ Auth::user()->etudiant->dateNaiss }}</a>
                            </li>
                            <li class="list-group-item">
                              <b>Lieu de naissance :</b> <a class="float-right">{{ Auth::user()->etudiant->lieuNaiss }}</a>
                            </li>
                            <li class="list-group-item">
                              <b>Nationnalité :</b> <a class="float-right">{{ Auth::user()->etudiant->nationalite }}</a>
                            </li>
                            <li class="list-group-item">
                              <b>Filiation :</b> <a class="float-right">{{ Auth::user()->etudiant->filiation }}</a>
                            </li>
                            <li class="list-group-item">
                              <b>Cohorte :</b> <a class="float-right">{{ Auth::user()->etudiant->cohorte }}</a>
                            </li>
                            @endif
                            {{-- <li class="list-group-item">
                              <b>Friends</b> <a class="float-right">13,287</a>
                            </li> --}}
                          </ul>
                        </div>
                        <!-- /.card-body -->
                      </div>
                    </div>
                    <!-- /.tab-pane -->
  
                    <div class="tab-pane" id="settings">
                      <form class="form-horizontal" action="{{ route('store.profile') }}" method="POST">
                        <h3 class="mb-3">Modifier le mot de passe</h3>
                        <div class="form-group row">
                            <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                          <label for="password" class="col-sm-3 col-form-label">Nouveau mot de passe :</label>
                          <div class="col-sm-8">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required >
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="password_confirmation" class="col-sm-3 col-form-label">Confirmer le mot de passe :</label>
                          <div class="col-sm-8">
                            <input type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                          </div>
                        </div>
                        
                        <div class="form-group row">
                          <div class="offset-sm-2 col-sm-7 text-center">
                            <button type="submit" class="btn btn-primary">Valider</button>
                          </div>
                        </div>
                      </form>
                    </div>
                    <!-- /.tab-pane -->
                  </div>
                  <!-- /.tab-content -->
                </div><!-- /.card-body -->
              </div>
              <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
@endsection