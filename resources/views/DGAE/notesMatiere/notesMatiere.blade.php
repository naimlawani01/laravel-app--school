@extends('admin.layouts.app')

@section('title')
    Notes Etudiants par matiere
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
          <h1>Notes par matiere</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Notes par matiere</li>
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
              <h3 class="card-title">Chercher les notes des étudiants par matiere</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
          <form role="form" method="POST" id="quickForm" action="{{ route('store.notesMatiere') }}">
                @csrf
                
              <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="matiere">Matiere*</label>
                          <select name="nomMat" class="custom-select" id="matiere">
                              @foreach ($matieres as $matiere)
                                  <option value="{{ $matiere->nomMat }}">{{ $matiere->nomMat }}</option>
                              @endforeach
                          </select>
                          {{-- <input type="text" name="nomMat" class="form-control" id="exampleInputPassword1" placeholder="Entrer le nom de la matiere"> --}}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Année*</label>
                            <select name="annee" class="custom-select" id="annee">
                              @foreach ($annees as $annee)
                                  <option value="{{ $annee->annee }}">{{ $annee->annee }}</option>
                              @endforeach
                          </select>
                            {{-- <input type="text" name="annee" class="form-control" id="exampleInputPassword1" placeholder="Entrer l'année"> --}}
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