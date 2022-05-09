<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src={{ asset("admin/dist/img/logo_ci.png") }} alt="Logo CI" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Centre Info</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src={{ asset("admin/dist/img/avatar_mt.png") }} class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{ route('profile') }}" class="d-block">
          @auth
          @if (Auth::user()->role_id==4)
            {{ Auth::user()->etudiant->nom }} {{ Auth::user()->etudiant->prenom }}
          @else
            {{Auth::user()->name }}
          @endif
          @endauth </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="{{ route('dashboard') }}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Tableau de bord
                {{-- <i class="right fas fa-angle-left"></i> --}}
              </p>
            </a>
          </li>
        @if(Auth::user()->role_id==1)
          <li class="nav-item">
            <a href="{{ route('acceuil') }}" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Acceuil
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('dashboard') }}" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                dashboard
              </p>
            </a>
          </li>
          
              <li class="nav-item">
                <a href="{{ route('etudiant.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Etudiant</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('professeur.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>professeur</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('programme.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Programme</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('inscription.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inscription</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('departement.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Departement</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('matiere.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Matiere</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('matiere.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Semestre</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('post.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Article</p>
                </a>
              </li>
            
          
        @endif
        @if(Auth::user()->role_id==2)
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Emploi du temps
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('emploi.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Liste</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('emploi.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ajoute</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Etudiant
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('chercherDette') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dette</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('notesMatiere') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Notes par Matiere</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('notesEtudiant') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Notes dans un semestre</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('releverNote') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Relevé de note</p>
                </a>
              </li>
            </ul>
          </li>
        @endif
       
        @if(Auth::user()->role_id==3)
        <li class="nav-header">EXAMPLES</li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa fa-list"></i>
              <p>
                Liste des étudiants
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              @foreach ($matieres as $matiere)
              <li class="nav-item">
                <a href="{{route('espaceProf.listeEtudiant',['idProf'=> $professeur->id, 'idMat'=>$matiere->id] )}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{$matiere->nomMat}}</p>
                </a>
              </li>
              @endforeach
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa fa-plus"></i>
              <p>
                Saisir les notes
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              @foreach ($matieres as $matiere)
              <li class="nav-item">
                <a href="{{route('note.create',['idMatiere'=>$matiere->id] )}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{$matiere->nomMat}}</p>
                </a>
              </li>
              @endforeach
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa fa-eye"></i>
              <p>
                  Voir les notes
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              @foreach ($matieres as $matiere)
              <li class="nav-item">
                <a href="{{route('note.index',['idMatiere'=>$matiere->id] )}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{$matiere->nomMat}}</p>
                </a>
              </li>
              @endforeach
            </ul>
          </li>
        @endif
        @if(Auth::user()->role_id==4)
          <li class="nav-header">ESPACE ETUDIANT</li>
            <li class="nav-item">
              <a href="" class="nav-link">
                <i class="nav-icon far fa-calendar-alt"></i>
                <p>
                  Emploi du Temps
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('mesCours') }}" class="nav-link">
                <i class="nav-icon fas fa-atlas"></i>
                <p>
                  Mes Cours
                </p>
              </a>
            </li>
            @php $nb_note = count($matieres_notees); @endphp  <!--Preparation du nombre de cours où l'étudiant a au moins une note-->
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-pen"></i>
                <p>
                  Mes Notes
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                @if ($nb_note > 0)      
                  @foreach($matieres_notees as $matiere) 
                    <li class="nav-item">
                      <a href="{{route('notes', $matiere->nomMatiere) }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>{{$matiere->nomMatiere}}</p>
                      </a>
                    </li>
                  @endforeach
                  <li class="nav-item">
                    <a href="{{route('notes', "all") }}" class="nav-link"> <!-- parametre all si on veut toutes les notes-->
                      <i class="far fa-circle nav-icon"></i>
                      <p>Toutes mes Notes</p>
                    </a>
                </li>
                @endif 
                <li class="nav-item">
                  <a href="{{route('notes.old') }}" class="nav-link">
                    <i class="far fa-backspace nav-icon"></i>
                    <p>Plus anciennes</p>
                  </a>
                </li>
              </ul>
            </li>
            @php $nb_session=count($liste_sessions); @endphp  <!--Verification si l'etudiant a des sessions-->
            @if ($nb_session > 0)
              <li class="nav-item">
              <a href="{{route('notes', "sessions") }}" class="nav-link"> <!-- parametre session si on veut toutes les sessions-->
                  <i class="nav-icon fas fa-eraser"></i>
                  <p>
                    Mes Sessions
                    <span class="badge badge-warning right">{{$nb_session}}</span>
                  </p>
                </a>
              </li>
            @endif 
            @php
              $nb_dettes = count($liste_dettes['semestre1'])+count($liste_dettes['semestre2'])
                          +count($liste_dettes['semestre3'])+count($liste_dettes['semestre4'])
                          +count($liste_dettes['semestre5'])+count($liste_dettes['semestre6']);
            @endphp
            <!--Verification si l'etudiant a des dettes-->
            @if ($nb_dettes > 0)
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-times"></i>
                  <p>
                    Mes Dettes
                    <i class="fas fa-angle-left right"></i>
                    <span class="badge badge-danger right">{{$nb_dettes}}</span>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  @if (count($liste_dettes['semestre1']) > 0)      
                      <li class="nav-item">
                        <a href="{{route('dettes', $liste_dettes['semestre1'][0]->numSemestre) }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>
                            Semestre 1
                            <span class="badge badge-danger right">{{count($liste_dettes['semestre1'])}}</span>
                          </p>
                        </a>
                      </li>
                  @endif
                  @if (count($liste_dettes['semestre2']) > 0)      
                      <li class="nav-item">
                        <a href="{{route('dettes', $liste_dettes['semestre2'][0]->numSemestre) }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>
                            Semestre 2
                            <span class="badge badge-danger right">{{count($liste_dettes['semestre2'])}}</span>
                          </p>
                        </a>
                      </li>
                  @endif
                  @if (count($liste_dettes['semestre3']) > 0)      
                      <li class="nav-item">
                        <a href="{{route('dettes', $liste_dettes['semestre3'][0]->numSemestre) }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>
                            Semestre 3
                            <span class="badge badge-danger right">{{count($liste_dettes['semestre3'])}}</span>
                          </p>
                        </a>
                      </li>
                  @endif
                  @if (count($liste_dettes['semestre4']) > 0)      
                      <li class="nav-item">
                        <a href="{{route('dettes', $liste_dettes['semestre4'][0]->numSemestre) }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>
                            Semestre 4
                            <span class="badge badge-danger right">{{count($liste_dettes['semestre4'])}}</span>
                          </p>
                        </a>
                      </li>
                  @endif
                  @if (count($liste_dettes['semestre5']) > 0)      
                      <li class="nav-item">
                        <a href="{{route('dettes', $liste_dettes['semestre5'][0]->numSemestre) }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>
                            Semestre 5
                            <span class="badge badge-danger right">{{count($liste_dettes['semestre5'])}}</span>
                          </p>
                        </a>
                      </li>
                  @endif
                  @if (count($liste_dettes['semestre6']) > 0)      
                      <li class="nav-item">
                        <a href="{{route('dettes', $liste_dettes['semestre6'][0]->numSemestre) }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>
                            Semestre 6
                            <span class="badge badge-danger right">{{count($liste_dettes['semestre6'])}}</span>
                          </p>
                        </a>
                      </li>
                  @endif
                </ul>
            </li>
          @endif
            <li class="nav-item">
              <a href="{{route('dashboard') }}" class="nav-link">
                <i class="nav-icon fas fa-cross"></i>
                <p>
                  Statistiques
                </p>
              </a>
            </li>
        @endif 
      </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>