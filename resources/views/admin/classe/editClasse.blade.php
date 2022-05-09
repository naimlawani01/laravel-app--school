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
                <form role="form" method="POST" id="quickForm" action="{{ route('classe.update',['classe_id'=>$classe->id ]) }}">
                        @method('put')
                        @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nom de la classe</label>
                            <input type="text" name="nomClasse" value="{{$classe->nomClasse}}" class="form-control" id="exampleInputEmail1" placeholder="Entrer le matricule">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nom du programme</label>
                            <select class="form-control select2" name="nomProg" style="width: 100%;">
                                @foreach ($programmes as $programme)
                                    <option value="{{$programme->nomProg }}" @if ($programme->nomProg== $classe->nomProg)
                                        selected
                                    @else
                                        
                                    @endif>{{$programme->nomProg}}</option>
                                @endforeach
                            </select>
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
