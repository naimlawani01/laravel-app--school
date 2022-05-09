@extends('admin.layouts.app')
@section('title')
    Etudiant endettés
@endsection
@section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>liste des étudiants endettés en {{ $matiere }} </h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">liste des étudiants endettés</li>
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
                  <h3 class="card-title">Etudiants endettés en {{ $matiere }}</h3>
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
                      <th>Semestre</th>
                      <th>Année</th>
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
                    <td>{{ $item->numSemestre }}</td>
                    <td>{{ $item->annee }}</td>
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
