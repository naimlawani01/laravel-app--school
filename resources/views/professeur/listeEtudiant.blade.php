@extends('admin.layouts.app')

@section('title')
    Tableau de bord de l'admin
@endsection

@section('content')
<div class="content-header">
  <div class="container-fluid">
  <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">{{$matiere->nomMat}}</h1>
        <h2>Liste des étudiants</h2>
      </div><!-- /.col -->
      <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Dashboard v1</li>
      </ol>
      </div><!-- /.col -->
  </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
 <table class="table">
   <thead>
     <tr>
       <th>Matricule</th>
       <th>Nom</th>
       <th>Prénom</th>
     </tr>
   </thead>
   <tbody>
     @foreach ($etudiants as $etudiant)       
      <tr>
        <td scope="row">{{$etudiant->etudiant->matricule}}</td>
        <td>{{$etudiant->etudiant->nom}}</td>
        <td>{{$etudiant->etudiant->prenom}}</td>
      </tr>
     @endforeach
   </tbody>
 </table>
@endsection