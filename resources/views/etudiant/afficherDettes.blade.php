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
        <div class="">
             <div class="row">
                <div class = "col-sm-1"> </div>
                <div class="callout callout-danger col-sm-10">
                    <h3 class="">Consultation des dettes du semestre {{$semestreDette[0]->numSemestre}}</h3>
                </div>
            </div>
             <div class = "row">
                <div class = "col-sm-1"> </div>
                <div class="card col-sm-10">
                    <div class="card-header">
                        <h3 class="card-title">INFORMATIONS DE L'ETUDIANT</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <table class="table table-striped">
                        <tbody>
                            <tr>
                                <th>MATRICULE : </th>
                                <td>{{$semestreDette[0]->matricule}}</td>
                            </tr>
                            <tr>
                                <th>NOM :</th>
                                <td>{{$semestreDette[0]->nom}}</td>
                            </tr>
                            <tr>
                                <th>PRENOM :</th>
                                <td>{{$semestreDette[0]->prenom}}</td>
                            </tr>
                            <tr>
                               @php
                                    $niveau;
                                    if($semestreActuelle <= 2){ $niveau = "Licence 1"; }
                                    elseif ($semestreActuelle <= 4) { $niveau = " Licence 2 ";  }
                                    elseif ($semestreActuelle <= 6) { $niveau = " Licence 3 ";  }
                                @endphp
                                <td><strong>NIVEAU :</strong></td>
                                <td>{{$niveau}}, Semestre {{$semestreActuelle}}</td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                <!-- /.card-body -->
                </div>
            </div>
            <br/>

             <div class = "row"> 
                <div class = "col-sm-1"> </div>
                <div class="card col-sm-10">
                    <div class="card-header">
                        <h3 class="card-title">AFFICHAGE DES DETTES</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <table class="table table-striped">
                        <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Matière</th>
                                <th>Evaluation 1</th>
                                <th>Evaluation 2</th>
                                <th>Evaluation 3</th>
                                <th>Moyenne</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i=0; @endphp
                            @foreach ($semestreDette as $notes)
                                @php
                                    $i++;
                                    //si l'une des notes est nulle n'affiche pas la moyenne
                                    if($notes->note1==null || $notes->note2==null || $notes->note3==null) { $notes->moyenne ="En attente";}                     
                                @endphp
                                <tr>
                                    <td>{{$i}}.</td>
                                    <td>{{$notes->nomMatiere}}</td>                                 
                                    <td>{{$notes->note1 ?: 'Aucune note'}}</td>
                                    <td>{{$notes->note2 ?: 'Aucune note'}}</td>
                                    <td>{{$notes->note3 ?: 'Aucune note'}}</td>  <!-- si la note vaut null, afficher aucune note -->   
                                    <td class="text-danger"><strong>{{$notes->moyenne?: 'En attente'}}</strong></td>  <!-- si cest null dans la BD, afficher en attente -->   
                                </tr>
                            @endforeach  
                        </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>                
        </div>
    </div>
</section>
@endsection