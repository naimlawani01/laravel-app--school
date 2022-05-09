@extends('admin.layouts.app')
@section('title')
   les Notes de {{ $nom_etud }}
@endsection
@section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-7">
                <h1>Les notes de {{ $nom_etud }} en {{ $classe }}</h1>
              </div>
              <div class="col-sm-5">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">les notes d'un étudiant par semestre</li>
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
                  <h3 class="card-title">Les notes de <b>{{ $nom_etud }}</b> en {{ $classe }} de l'année {{ $module1[0]->annee }}</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <div class="text-center mb-2">
                    <h3>Semestre N°{{ $module1[0]->numSemestre }}</h3>
                  </div>
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th class="text-center">Matiere</th>
                      <th>Note 1</th>
                      <th>Note 2</th>
                      <th>Note 3</th>
                      <th>Moyenne</th>
                    </tr>
                    </thead>
                    <tbody>
                @foreach ($module1 as $item)
                  <tr>
                    <td>{{ $item->nomMat }}</td>
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
                <hr>
                <div class="card-body">
                  <div class="text-center mb-2">
                    <h3>Semestre N°{{ $module2[0]->numSemestre }}</h3>
                  </div>
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th class="text-center">Matiere</th>
                      <th>Note 1</th>
                      <th>Note 2</th>
                      <th>Note 3</th>
                      <th>Moyenne</th>
                    </tr>
                    </thead>
                    <tbody>
                @foreach ($module2 as $item)
                  <tr>
                    <td>{{ $item->nomMat }}</td>
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
