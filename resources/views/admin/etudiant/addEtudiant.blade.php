@extends('admin.layouts.app')

@section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Ajout d'un professeur</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Ajout d'un professeur</li>
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
                    <h3 class="card-title">Ajout d'un professeur</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                <form role="form" method="POST" id="quickForm" enctype="multipart/form-data" action="{{ route('etudiant.store') }}">
                        @method('put')
                        @csrf
                    <div class="card-body">
                      <div class="col-md-4">
                        <div class="position-relative form-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="image" id="image" placeholder="ajouter une image" >
                                <label for="image" class="custom-file-label">ajouter une image</label>
                            </div>
                        </div>
                    </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Matricule</label>
                        <input type="text" name="matricule" class="form-control" id="exampleInputEmail1" placeholder="Entrer le matricule">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Nom</label>
                        <input type="text" name="nom" class="form-control" id="exampleInputPassword1" placeholder="Entrer le nom">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Prénom</label>
                        <input type="text" name="prenom" class="form-control" id="exampleInputPassword1" placeholder="Entrer le prenom">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Date de Naissance</label>
                        <input type="date" name="dateNaiss" class="form-control" id="exampleInputEmail1" placeholder="Enter de naissiance">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Lieu de Naissance</label>
                        <input type="text" name="lieuNaiss" class="form-control" id="exampleInputEmail1" placeholder="Enter le lieu de naissance">
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
                        <input type="text" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter le mail">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Filiation</label>
                        <input type="text" name="filiation" class="form-control" id="exampleInputEmail1" placeholder="Enter le lieu de naissance">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Nationalité</label>
                        <input type="text" name="nationalite" class="form-control" id="exampleInputEmail1" placeholder="Enter le lieu de naissance">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Cohorte</label>
                        <input type="text" name="cohorte" class="form-control" id="exampleInputEmail1" placeholder="Enter le lieu de naissance">
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
