@extends('admin.layouts.app')

@section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Ajout d'une matière</h1>
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
                    <h3 class="card-title">Ajout d'une matière</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                <form role="form" method="POST" id="quickForm" action="{{ route('matiere.store') }}">
                        @method('put')
                        @csrf
                    <div class="card-body">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Nom de la matiere</label>
                        <input type="text" name="nomMat" class="form-control" id="exampleInputEmail1" placeholder="Entrer le matricule">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Semestre</label>
                        <select name="semestre" class="form-control" id="" class="custum-select">
                                @foreach ($semestres as $item)
                                    <option value="{{ $item->numSemestre }}">{{ $item->numSemestre }}</option>
                                @endforeach
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Professeur</label>
                        <select class="form-control" name="professeur" id="">
                                @foreach ($professeurs as $item)
                                    <option value="{{ $item->matricule }}">{{ $item->matricule }}</option>
                                @endforeach
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Description</label>
                        <Textarea class="form-control" name="description"></Textarea>
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
