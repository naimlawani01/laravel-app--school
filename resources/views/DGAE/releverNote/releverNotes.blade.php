@extends('admin.layouts.app')

@section('title')
    Relever de note d'un etudiant
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
          <h1>Relever de note d'un étudiant</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Relever de note d'un étudiant</li>
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
              <h3 class="card-title">Chercher le relever de note d'un étudiant</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
          <form role="form" method="POST" id="quickForm" action="{{ route('store.releverNote') }}">
                @csrf
                
              <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="matricule">Matricule*</label>
                            <input type="text" name="matricule" class="form-control" id="matricule" placeholder="Entrer le matricule de l'étudiant">
                          </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Classe*</label>
                            <select name="nomClasse" class="custom-select" id="matiere">
                                @foreach ($classes as $classe)
                                    <option value="{{ $classe->nomClasse }}">{{ $classe->nomClasse }}</option>
                                @endforeach
                            </select>
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