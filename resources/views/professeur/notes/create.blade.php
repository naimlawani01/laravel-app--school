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
                    <form action="{{route('note.store',['idMatiere'=>$matiere->id])}}" method="post">
                    @csrf
                    @method('POST')
                    @foreach ($etudiants as $etudiant)
                    <tr>
                        <input type="hidden" name="etudiant_id[]" value="{{$etudiant->etudiant->id}}">
                        <td>{{$etudiant->etudiant->matricule}}</td>
                        <td>{{$etudiant->etudiant->nom}}</td>
                        <td>{{$etudiant->etudiant->prenom}}</td>
                        <td><input class="form-control" type="number" step="any" name="note1[]" id=""></td>
                        <td><input class="form-control" type="number" step="any" name="note2[]" id=""></td>
                        <td><input class="form-control" type="number" step="any" name="note3[]" id=""></td>
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