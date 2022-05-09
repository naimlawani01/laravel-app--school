@extends('admin.layouts.app')

@section('content')
        <!-- Content Header (Page header) -->
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
                <form role="form" method="POST" id="quickForm" action="{{ route('inscription.update',$inscription->id ) }}">
                        @method('put')
                        @csrf
                    <div class="card-body">
                      <div class="form-group">
                        <label for="matricule"></label>
                      <input type="hidden" name="matricule" value="{{$inscription->matricule}}" class="form-control" id="matricule" placeholder="Entrer le matricule" required>
                      </div>
                      <div class="form-group">
                        <label for="matricule"></label>
                      <input type="hidden" name="etudiant_id" value="{{$inscription->etudiant_id}}" class="form-control" id="matricule" placeholder="Entrer le matricule" required>
                      </div>
                      <div class="form-group">
                        <label for="annee">Annee</label>
                        <input type="text" name="annee" value="{{$inscription->annee}}" class="form-control" id="annee" placeholder="Entrer l'année d'inscription" required>
                      </div>
                      <div class="form-group">
                        <label for="nomClasse">Niveau</label>
                        <input type="text" name="nomClasse" value="{{$inscription->nomClasse}}" class="form-control" id="nomClasse" placeholder="Entrer le niveau" required>
                      </div>
                     
                      <div class="form-group">
                        <label for="numSemestre">Semestre</label>
                        <input type="number" name="numSemestre" value="{{$inscription->numSemestre}}" class="form-control" id="numSemestre" placeholder="Enter le numero du semestre" required>
                      </div>
                     
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                      <div class="form-actions form-group"><button type="submit" class="btn btn-success btn-sm" style="background-color: green;color:white"><h4>Ajouter</h4></button></div>
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
