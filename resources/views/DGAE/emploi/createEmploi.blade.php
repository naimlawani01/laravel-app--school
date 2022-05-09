@extends('admin.layouts.app')

@section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Emploi du temps</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Text Editors</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>
    
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <div class="card card-outline card-info">
                <div class="card-header">
                  <h3 class="card-title">
                    Ajouter un emploi du temps
                    <small>Simple et rapide</small>
                  </h3>
                  <!-- tools box -->
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                      <i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool btn-sm" data-card-widget="remove" data-toggle="tooltip"
                            title="Remove">
                      <i class="fas fa-times"></i></button>
                  </div>
                  <!-- /. tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body pad">
                  <form role="form" method="POST" id="quickForm" enctype="multipart/form-data" action="{{ route('emploi.store') }}" >
                  @csrf
                  <div class="row">
                    <div class="col-md-8">
                      <div class="form-group">
                        <input type="text" name="nomSemestre" class="form-control" id="exampleInputPassword1" placeholder="Entrer le semestre">
                      </div>
                    </div>
                  </div>
                  <div class="mb-3">
                    <textarea class="textarea" placeholder="Place some text here" name="emploi"
                              style="width: 100%; height: 700px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                  </div>
                  <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                      </div>
                        </form>
                  {{-- <p class="text-sm mb-0">
                    Editor <a href="https://github.com/bootstrap-wysiwyg/bootstrap3-wysiwyg">Documentation and license
                    information.</a>
                  </p> --}}
                </div>
              </div>
            </div>
            <!-- /.col-->
          </div>
          <!-- ./row -->
        </section>
      @endsection
