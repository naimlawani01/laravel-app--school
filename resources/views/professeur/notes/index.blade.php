@extends('admin.layouts.app')

@section('title')
    Saisir les notes
@endsection

@section('content')
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <h1 style="text-align: center;">{{$matiere->nomMat}}</h1>
        </div>
        <div class="col-md-12"> 
            <table class="table">
                <thead>
                    <tr>
                        <th>Matricule</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Note1</th>
                        <th>Note2</th>
                        <th>Note3</th>
                        <th>Moyenne</th>
                    </tr>
                </thead>
                <tbody> 
                  @foreach ($evaluation as $evaluation)
                    <tr>
                        <td>{{$evaluation->etudiant->matricule}}</td>
                        <td>{{$evaluation->etudiant->nom}}</td>
                        <td>{{$evaluation->etudiant->prenom}}</td>
                        <td>{{$evaluation->note1}}</td>
                        <td>{{$evaluation->note2}}</td>
                        <td>{{$evaluation->note3}}</td>
                        <td>{{$evaluation->moyenne}}</td>
                    </tr>
                  @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection