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
                    </tr>
                </thead>
                <tbody>
                    <form action="{{route('note.update',['idMatiere'=>$matiere->id])}}" method="post">
                    @csrf
                    @method('PUT')
                    @foreach ($evaluationL1 as $evaluationL1)
                    <tr>
                        <input type="hidden" name="id[]" value="{{$evaluationL1->id}}">
                        <td>{{$evaluationL1->etudiant->matricule}}</td>
                        <td>{{$evaluationL1->etudiant->nom}}</td>
                        <td>{{$evaluationL1->etudiant->prenom}}</td>
                        <td><input class="form-control" type="number" step="any" name="note1[]" value="{{$evaluationL1->note1}}"></td>
                        <td><input class="form-control" type="number" step="any" name="note2[]" value="{{$evaluationL1->note2}}"></td>
                        <td><input class="form-control" type="number" step="any" name="note3[]" value="{{$evaluationL1->note3}}"></td>
                    </tr>
                    @endforeach
                    <tr>
                        <td><button class="btn btn-success" type="submit">Enregistrer</button></td>
                    </tr>
                    
                    </form>
                </tbody>
            </table>
        </div>
    </div>
@endsection