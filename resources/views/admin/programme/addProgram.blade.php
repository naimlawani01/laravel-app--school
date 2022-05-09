@extends('admin.layouts.app')
@section('content')

<section class="content">
        <div class="container-fluid">
        <div class="card card-default">
        <div class="card-header">
          <h3 class="card-title">Ajouter un programme</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
                <form role="form" method="POST" id="quickForm" action="{{ route('programme.store') }}">
                        @method('put')
                        @csrf
          <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                        <label for="exampleInputPassword1">Nom du programme</label>
                        <input type="text" name="nomProg" class="form-control" id="exampleInputPassword1" placeholder="Entrer le nom">
                </div>
              <!-- /.form-group -->
              <div class="form-group">
                <label for="">  </label>
                <button type="submit" class="btn btn-block btn-primary">Enregistrer</button>
              </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
            <div class="col-md-6">
              <!-- /.form-group -->
              <div class="form-group">
                <label>Département</label>
                <select name="nomDept" class="form-control select2" style="width: 100%;">
                  @foreach ($departements ?? '' as $item)
                      <option value="{{ $item->nomDept }}">{{ $item->nomDept }}</option>
                  @endforeach
                </select>
              </div>

              <!-- /.form-group -->
            </div>
            <!-- /.col -->
          </div>
        </form>
          <!-- /.row -->
          <!-- /.row -->
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
          the plugin.
        </div>
      </div>
        </div>
</section>
@endsection