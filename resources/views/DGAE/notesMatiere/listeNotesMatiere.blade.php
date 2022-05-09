@extends('admin.layouts.app')
@section('title')
    Notes des étudiants en {{ $matiere }}
@endsection
@section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>liste des notes des étudiants en {{ $matiere }}</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">liste des notes des étudiants</li>
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
                  <h3 class="card-title">Notes des étudiants en {{ $matiere }} de {{ $annee }}</h3>
                  <a href="" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  <i class="fa fa-print fa-2x float-right " aria-hidden="true"></i>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                    
                  </form> 
                  </a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Matricule</th>
                      <th>Nom et Prénoms</th>
                      <th>Note 1</th>
                      <th>Note 2</th>
                      <th>Note 3</th>
                      <th>Moyenne</th>
                    </tr>
                    </thead>
                    <tbody>
                @foreach ($list_etuds as $item)
                  <tr>
                    <td>{{$item->matricule}}</td>
                    <td>{{$item->nom.' '.$item->prenom}}</td>
                    <td>{{ $item->note1 }}</td>
                    <td>{{ $item->note2 }}</td>
                    <td>{{ $item->note3 }}</td>
                    <td>{{ $item->moyenne }}</td>
                  </tr>

                @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                      {{-- <th>{{ $etudiants->links() }}</th> --}}
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
