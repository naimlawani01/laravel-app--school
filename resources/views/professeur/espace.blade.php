@extends('admin.layouts.app')

@section('content')
  <div class="row">
    <div class="col-md-12">
          
      <h1>{{$matiere->nomMat}}</h1>
      <ul>
        <a class="btn btn-primary" href="">Liste des étudiants</a>
            <li class=" dropdown-toggle" type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                        Evaluation
            </li>
            <div class="dropdown-menu dropdown-menu-left" aria-labelledby="triggerId">
                <a class="dropdown-item" href="{{route('note.create', ['idMatiere'=> $idMatiere, 'numEva'=> 1])}}">Evaluation N:1</a>
                <a class="dropdown-item" href="{{route('note.create', ['idMatiere'=> $idMatiere, 'numEva'=> 2])}}">Evaluation N:2</a>
                <a class="dropdown-item" href="{{route('note.create', ['idMatiere'=> $idMatiere, 'numEva'=> 3])}}">Evaluation N:3</a>
            </div>
            <a class="btn btn-primary" href="{{route('note.index', ['idMatiere'=>$idMatiere])}}"><li>Afficher les notes</li></a>
      </ul>
    </div>
  </div>
@endsection