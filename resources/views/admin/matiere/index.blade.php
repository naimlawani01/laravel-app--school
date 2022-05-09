@extends('admin.layouts.app')
@section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>liste des matieres</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">liste des matieres</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>
    
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title"><a href="{{ route('matiere.create') }}" class="btn btn-primary">ajouter une matiere</a></h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Nom</th>
                      <th>Semestre</th>
                      <th>Professeur</th>
                      <th></th>
                      <th></th>
                    </tr>
                    </thead>
                    <tbody>
                @foreach ($matiereWithProf as $nomProf=>$item)
                    <tr>
                      <td>{{$item->nomMat}}</td>
                      <td>{{$item->numSemestre}}</td>
                    <td>{{ $nomProf }}</td>
                      <td><a class="btn btn-app" href="{{route('matiere.edit',['matiere_id'=>$item->id ]) }}" class="btn btn-primary inline">
                        <i class="fas fa-edit"></i>modifier
                        </a></td>
                        <td>
                        <form action="{{ route('matiere.destroy',['matiere'=>$item->id]) }}" style="display:inline;"  method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger inline"><i class="fa fa-trash" aria-hidden="true"></i>Suprimer</button>
                        </form>
                      </td>
                    </tr>

                    @endforeach
                  </tbody>
              </table>
              <div class="row d-flex justify-content-center mt-3">
              
              </div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </section>

<script>
        $(function () {
          $("#example1").DataTable();
          $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
          });
        });
      </script>
       @endsection
