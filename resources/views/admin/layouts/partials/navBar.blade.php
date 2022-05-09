<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/" class="nav-link">Accueil</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('acceuil') }}" class="nav-link">Page d'acceuil</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Rechercher" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <b>Déconnection</b>
        </a>
        <div class="dropdown-menu dropdown-menu-md-right  mr-5">
          <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
            <i class="fa fa-unlock-alt mr-2"></i>
                Se déconnecter

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form> 
          </a>
          
        </div>
      </li>
    </ul>
  </nav>