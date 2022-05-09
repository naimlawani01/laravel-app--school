@extends('admin.layouts.app')
@section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>liste des emplois du temps</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">liste des emplois du temps</li>
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
                  <h3 class="card-title">DataTable with default features</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>#</th>
                      <th class="text-center">Nom semestre</th>
                      @can('create', 'App\Emploi')
                        <th class="text-center">Action</th>
                      @endcan
                    </tr>
                    </thead>
                    <tbody>
                @foreach ($emplois as $emploi)
                    <tr>
                      <td scope="row">{{$emploi->id}}</td>
                      <td class="text-center"><a href="{{ route('emploi.show',['emploi'=>$emploi->id]) }}">{{$emploi->nomSemestre}}</a></td>
                      @can('create', 'App\Emploi')
                        <td class="text-center">
                          <a href="{{ route('emploi.edit',['emploi'=>$emploi->id]) }}" class="btn btn-primary"><i class="fas fa-pencil-alt"></i> Modifier</a>
                          <form action="{{ route('emploi.destroy',['emploi'=>$emploi->id]) }}" style="display:inline;" method="POST">
                              @csrf
                              @method('delete')
                              <button type="submit" class="btn btn-danger ml-5"><i class="fa fa-trash" aria-hidden="true"></i> Suprimer</button>
                          </form>
                        </td>
                      @endcan
                    </tr>

                    @endforeach
                  </tbody>
              </table>
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
