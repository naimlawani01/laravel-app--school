@extends('admin.layouts.app')

@section('content')
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Modification des informations</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Modification des informations</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>
    
        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <!-- left column -->
              <div class="col-md-12">
                <!-- jquery validation -->
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Modification des informations</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                <form role="form" method="POST" id="quickForm" action="{{ route('etudiant.update',['etudiant_id'=>$etudiant->id ]) }}">
                        @method('put')
                        @csrf
                    <div class="card-body">
                      <div class="form-group">
                        <label for="exampleInputEmail1">matricule</label>
                      <input type="text" name="matricule" value="{{$etudiant->matricule}}" class="form-control" id="exampleInputEmail1" placeholder="Entrer le matricule">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Nom</label>
                        <input type="text" name="nom" value="{{$etudiant->nom}}" class="form-control" id="exampleInputPassword1" placeholder="Entrer le nom">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Prénom</label>
                        <input type="text" name="prenom" value="{{$etudiant->prenom}}" class="form-control" id="exampleInputPassword1" placeholder="Entrer le prenom">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Date de Naissance</label>
                        <input type="date" name="dateNaiss" value="{{$etudiant->dateNaiss}}" class="form-control" id="exampleInputEmail1" placeholder="Enter de naissiance">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Lieu de Naissance</label>
                        <input type="text" name="lieuNaiss" value="{{$etudiant->lieuNaiss}}" class="form-control" id="exampleInputEmail1" placeholder="Enter le lieu de naissance">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Sexe</label>
                        <select class="form-control select2" name="sexe" style="width: 100%;">
                                <option value="0" selected="selected">Homme</option>
                                <option value="1">Femme</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="text" name="email" value="{{$etudiant->email}}" class="form-control" id="exampleInputEmail1" placeholder="Enter le mail">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">fialiation</label>
                        <input type="text" name="filiation" value="{{$etudiant->filiation}}" class="form-control" id="exampleInputEmail1" placeholder="Enter le lieu de naissance">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nationalité</label>
                      <input type="text" name="nationalite" value="{{$etudiant->nationalite}}" class="form-control" id="exampleInputEmail1" placeholder="Enter le lieu de naissance">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Cohorte</label>
                      <input type="text" name="cohorte" value="{{$etudiant->cohorte}}" class="form-control" id="exampleInputEmail1" placeholder="Enter le lieu de naissance">
                    </div>
                  </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
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
@endsection
