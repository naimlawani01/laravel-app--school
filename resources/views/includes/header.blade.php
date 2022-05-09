<header id="header" id="home">
	  		<div class="header-top">
	  			<div class="container">
			  		<div class="row">
			  			<div class="col-sm-3 header-top-left no-padding">
              <a href="{{ route('acceuil') }}"><img src="logo_UGANC.png" height="60px" alt=""></a>
              </div>
                <div class="col-sm-6" id="titre">
                  <h1>CENTRE INFORMATIQUE</h1>
                </div>
			  			<div class="col-sm-3 header-top-right no-padding">
              <a href="{{ route('acceuil') }}"><img src="logoci.png" height="60px" alt=""></a>
			  			</div>
			  		</div>			  					
	  			</div>
			</div>
  <div class="container main-menu">
<<<<<<< HEAD
      <div class="row align-items-center justify-content-center d-flex ">
        <nav id="nav-menu-container">
          <ul class="nav-menu">
            <li><a href="{{ route('acceuil') }}">Accueil</a></li>
            <li><a href="#">Presentation</a>
                <ul>
                    <li><a href="{{ route('historique') }}">Historique</a></li>
                    <li><a href="{{ route('organigramme') }}">Organigramme</a></li>
                    <li><a href="{{ route('gallery') }}">Gallery</a></li>
                    
                </ul>
            </li>
            <li><a href="#">Departement</a>
			            <ul>
                      <li><a href="#">Departement Devoloppement </a>
                        <ul>
                          <li class="right"><a href="{{ route('cours') }}">Prorgramme</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Departement Intic</a></li>

			            </ul>  
            </li>
            <li><a href="{{ route('partenaire') }}">Partenaires</a></li>
            <li><a href="{{ route('admission') }}">Admission</a></li>
=======
      <div class="row align-items-center justify-content-between d-flex">
        <div id="logo">
          <a href="{{ route('acceuil') }}"><img src="img/logo.png" alt="" title="" /></a>
        </div>
        <nav id="nav-menu-container">
          <ul class="nav-menu">
            <li><a href="{{ route('acceuil') }}">Accueil</a></li>
            <li><a href="{{ route('cours') }}">Cours</a></li>
            <li><a href="{{ route('organigramme') }}">Organigramme</a></li>
            <li><a href="{{ route('admission') }}">Demande Admission</a></li>
>>>>>>> 89e0333bb4e650b43a48beb4ba61242c6211d27a
            <li><a href="{{ route('contact') }}">Contact</a></li>
            <li><a href="{{ route('login') }}">Se Connecter</a></li>
          </ul>
        </nav><!-- #nav-menu-container -->
      </div>
  </div>
</header><!-- #header -->
