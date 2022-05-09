@extends('admin.layouts.app')
@section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>liste des professeurs</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">liste des professeurs</li>
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
                  <h3 class="card-title"><a href="{{ route('programme.create') }}" class="btn btn-primary">ajouter un programme</a></h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Nom du programme</th>
                      <th>Nom du departement</th>
                      <th></th>
                      <th></th>
                      <th></th>
                    </tr>
                    </thead>
                    <tbody>
                @foreach ($programmes as $item)
                    <tr>
                      <td>{{$item->nomProg}}</td>
                      <td>{{$item->nomDept }}</td>
                    <td><a class="btn btn-app" href="{{route('programme.edit',['program_id'=>$item->id ]) }}" class="btn btn-primary inline">
                        <i class="fas fa-edit"></i> Edit
                      </a></td>
                      <td> 
                        <form action="{{ route('programme.destroy',['programme'=>$item->id]) }}" style="display:inline;"  method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger inline"><i class="fa fa-trash" aria-hidden="true"></i>Suprimer</button>
                        </form>
                      </td>
                    </tr>

                @endforeach
                    </tbody>
                    <tfoot>
                    
                      <th>{{ $programmes->links() }}</th>
                    </tr>
                    </tfoot>
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
