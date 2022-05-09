@extends('admin.layouts.app')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Widgets</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Widgets</li>
            </ol>
        </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-1"></div>  
            <div class="col-sm-10">
                <form action="{{route('notes.old.view')}}">
                    <div class="col-sm-12">
                    <div class="form-group">
                            <label>Matricule</label>
                            <select class="form-control select2bs4 select2-hidden-accessible" disabled="" style="width: 100%;" data-select2-id="20" tabindex="-1" aria-hidden="true">
                                <option selected="selected" data-select2-id="22">{{$matricule_etudiant}}</option>
                                <option>Washington</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-12">
                    <div class="form-group" data-select2-id="29">
                            <label>Semestre</label>
                            <select name="semestre" class="form-control select2bs4 select2-hidden-accessible" style="width: 100%;" data-select2-id="25" tabindex="-1" aria-hidden="true">
                                <option selected="selected" data-select2-id="27">Choisir le semestre</option>   
                                    @for($i=$semestre-1; $i>=1; $i--){
                                        <option value="{{$i}}" data-select2-id="33">Semestre {{$i}}</option>
                                    }
                                    @endfor   
                            </select>
                        </div>
                    </div>
                <button type="submit" class="btn btn-primary">Rechercher</button>           
              </form>
            </div>  
        </div>
    </div>
</section>
@endsection