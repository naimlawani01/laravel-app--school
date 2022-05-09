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
                <form role="form" method="POST" id="quickForm" action="{{ route('professeur.update',['prof_id'=>$professeur->id ]) }}">
                        @method('put')
                        @csrf
                    <div class="card-body">
                      <div class="form-group">
                        <label for="exampleInputEmail1">matricule</label>
                      <input type="text" name="matricule" value="{{$professeur->matricule}}" class="form-control" id="exampleInputEmail1" placeholder="Entrer le matricule">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Nom</label>
                        <input type="text" name="nom" value="{{$professeur->nom}}" class="form-control" id="exampleInputPassword1" placeholder="Entrer le nom">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Prénom</label>
                        <input type="text" name="prenom" value="{{$professeur->prenom}}" class="form-control" id="exampleInputPassword1" placeholder="Entrer le prenom">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">email</label>
                        <input type="text" name="email" value="{{$professeur->email}}" class="form-control" id="exampleInputEmail1" placeholder="Enter le lieu de naissance">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Telephone</label>
                        <input type="text" name="telephone" value="{{$professeur->telephone}}" class="form-control" id="exampleInputEmail1" placeholder="Enter le numero de telephone">
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
