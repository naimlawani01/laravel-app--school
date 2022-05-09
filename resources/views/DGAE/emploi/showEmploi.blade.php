@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1>{{ $emploi->nomSemestre }}</h1>
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
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
                <div class="col-md-12">
                    <?=$emploi->emploi ?>
                </div>
          </div>
        </div>
        @can('create', 'App\Emploi')
            <div class="row d-flex justify-content-center">
                <a href="{{ route('emploi.edit',['emploi'=>$emploi->id]) }}" class="btn btn-primary"><i class="fas fa-pencil-alt"></i>Modifier</a>
                <form action="{{ route('emploi.destroy',['emploi'=>$emploi->id]) }}" style="display:inline;" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger ml-5"><i class="fa fa-trash" aria-hidden="true"></i>Suprimer</button>
                </form>
            </div>
        @endcan

    </section>
@endsection