@extends('admin.layouts.app')

@section('title')
    Etudiants endettés
@endsection

@section('content')
<section class="content-header">
    @if (Session::has('danger'))
      <div class="alert alert-danger" role="alert">
        <strong>{{ Session::get('danger') }}</strong>
      </div>
    @endif
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Etudiants endettés</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Etudiants endettés</li>
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
              <h3 class="card-title">Chercher les étudiants endettés</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
          <form role="form" method="POST" id="quickForm" action="{{ route('store.chercherDette') }}">
                @csrf
                
              <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Classe*</label>
                            <input type="text" name="nomClasse" class="form-control" id="exampleInputEmail1" placeholder="Entrer le nom de la classe">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Matiere*</label>
                            <input type="text" name="nomMat" class="form-control" id="exampleInputPassword1" placeholder="Entrer le nom de la matiere">
                          </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Année*</label>
                            <input type="text" name="annee" class="form-control" id="exampleInputPassword1" placeholder="Entrer l'année">
                          </div>
                    </div>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Valider</button>
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