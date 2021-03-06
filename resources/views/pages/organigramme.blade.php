<!DOCTYPE html>
<html lang="en">
    @include('includes.head')
<head>
    <title>Page Organisation</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{ asset('organisation/css/style.css') }}">

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    @include('includes.header')
    <div class="site-wrap" id="home-section">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>

        		<!-- start banner Area -->
			<section class="banner-area relative about-banner" id="home">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">Organigramme</h1>
							<p class="text-white link-nav"><a href="{{ Route('acceuil') }}">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{ Route('contact') }}"> Contactez-Nous</a></p>
						</div>
					</div>
				</div>
            </section>


        <div class="site-section bg-image overlay counter" style="background-image: url('images/hero_1_no-text.jpg');">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-lg-6 mb-4">
                        <figure class="block-img-video-1" data-aos="fade">
                            <a href="https://vimeo.com/45830194" class="popup-vimeo">
                                <img src="organisation/images/hero_1_no-text.jpg" alt="Image" class="img-fluid">
                            </a>
                        </figure>
                    </div>
                    <div class="col-lg-5 ml-auto align-self-lg-center">
                        <h2 class="text-black mb-4 text-uppercase section-title">Notre Mission</h2>
                        <p class="text-black">Nous pr??voyons de renomer le nom du Centre Informatique, de cr??er de nouveaux d??partements qui servirons de sp??cialit??s pour les ??tudiants, cr??er des formations ?? cour terme qui serons sanctionn??es par des certificats, mettre en
                            place une formation de master en informatique. </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section bg-light counter" id="discover-section">
            <div class="container">
                <div class="row mb-5 justify-content-center">
                    <div class="col-md-7 text-center">
                        <div class="block-heading-1">
                            <h3 class="text-black text-uppercase">Region Universitaire Forte et Unique</h3>
                            <p>Le Centre Informatique est un vecteur de d??veloppement socio-??conomique important dans son milieu et contribue ?? surmonter les d??fis de la soci??t?? d'aujourd'hui et de celle de demain. Elle travaille en lien ??troit avec les
                                diff??rents acteurs du milieu afin de favoriser les transferts de connaissances o?? les parties s???enrichissent mutuellement dans le but commun de d??velopper une r??gion universitaire forte et unique.</p>
                        </div>
                    </div>
                </div>
                
                <div class="row mb-5">

                    <div class="col-lg-6 mb-5">
                        <img src="organisation/images/m.jpg" alt="Image" class="img-fluid">
                    </div>
                    <div class="col-lg-5 ml-auto align-self-center">
                        <h3 class="text-black text-uppercase mb-4">Cente Informatique</h3>
                        <p class="mb-5">L'??quipe du centre Informatique est form?? de cadres professionnel dans le domaine informatique et il r????oit des ??tudiants orient??s par l'Etat apr??s le BAC. <br>Nous avons:</p>

                        <div class="row mb-4">
                            <div class="col-md-6">
                                <div class="block-counter-1 block-counter-1-sm">
                                    <span class="number"><span data-number="20">0</span></span>
                                    <span class="caption text-black">Enseignants</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="block-counter-1 block-counter-1-sm">
                                    <span class="number"><span data-number="82">0</span></span>
                                    <span class="caption text-black">Etudiants</span>
                                </div>
                            </div>
                        </div>

                    </div>



                </div>

                <div class="row mb-5">

                    <div class="col-lg-6 mb-5 order-lg-2">
                        <img src="organisation/images/o.jpg" alt="Image" class="img-fluid">
                    </div>
                    <div class="col-lg-5 mr-auto align-self-center order-lg-1">
                        <h3 class="text-black text-uppercase mb-4">Cente Informatique</h3>
                        <p class="mb-5">L'??quipe du centre Informatique est form?? de cadres professionnel dans le domaine informatique et il r????oit des ??tudiants orient??s par l'Etat apr??s le BAC. <br>Nous avons:</p>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="block-counter-1 block-counter-1-sm">
                                    <span class="number"><span data-number="20">0</span></span>
                                    <span class="caption text-black">Enseignants</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="block-counter-1 block-counter-1-sm">
                                    <span class="number"><span data-number="82">0</span></span>
                                    <span class="caption text-black">Etudiants</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="site-section" id="team-section">
            <div class="container mt-0">
                <div class="row mb-5 justify-content-center">
                    <div class="col-md-7 text-center">
                        <h2 class="text-black text-uppercase section-title">Organigramme</h2>
                        <p>Nous vous pr??sentons les encadreurs du centre et leurs fonctions respectives.</p>
                        <a class="primary-btn wh" href="{{ asset('organigramme.pdf') }}">cliquer ici pour telecharger le pdf</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0" data-aos="fade-up">
                       
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
                        <div class="block-team-member-1 text-center rounded">
                            <figure>
                                <img src="organisation/images/1.png" alt="Image" class="img-fluid rounded-circle">
                            </figure>

                            <h5><span>Dr BAH Mamadou Lamarana /</span> Directeur G??n??ral</h4>
                                <p class="px-3 mb-3">C'est une grande chance pour moi, d'??tre l??, nous avons les meilleurs profs de la ville</p>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="200"></div>
                </div>

                 <div class="row">
                    
                    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
                        <div class="block-team-member-1 text-center rounded">
                            <figure>
                                <img src="organisation/images/1.png" alt="Image" class="img-fluid rounded-circle">
                            </figure>

                            <h5><span>Dr Tour?? Ibrahima Kalil /</span> Directeur Adjoint charg?? des ??tudes</h4>
                                <p class="px-3 mb-3">J'apprend beaucoup depuis que suis l??, malgr?? je men sors dificilement, les profs sont un peu exigents</p>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
                        <div class="block-team-member-1 text-center rounded">
                            <figure>
                                <img src="organisation/images/1.png" alt="Image" class="img-fluid rounded-circle">
                            </figure>

                            <h5><span>Dr Diallo Ibrahima Sory Kokouma/</span>Dr Adjoint charg?? de la recherche</h4>
                                <p class="px-3 mb-3">Quand on a tous les outils, pour la formation, on ne peut que bien apprendre, Cette institut est bien ??quip??e</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0" data-aos="fade-up">
                        <div class="block-team-member-1 text-center rounded">
                            <figure>
                                <img src="organisation/images/1.png" alt="Image" class="img-fluid rounded-circle">
                            </figure>

                            <h5><span>Mr Kaba Luckman/</span>S??cr??taire G??n??ral</h4>
                                <p class="px-3 mb-3">Quand on a tous les outils, pour la formation, on ne peut que bien apprendre, Cette institut est bien ??quip??e</p>
                        </div>
                    </div>
                </div>


                <!--2eme essai-->
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
                        <div class="block-team-member-1 text-center rounded">
                            <figure>
                                <img src="organisation/images/1.png" alt="Image" class="img-fluid rounded-circle">
                            </figure>

                            <h5><span>Mr Kaba Moustapha/</span>Chef de D??partement de D??velopement</h4>
                                <p class="px-3 mb-3">Quand on a tous les outils, pour la formation, on ne peut que bien apprendre, Cette institut est bien ??quip??e</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
                        <div class="block-team-member-1 text-center rounded">
                            <figure>
                                <img src="organisation/images/1.png" alt="Image" class="img-fluid rounded-circle">
                            </figure>

                            <h5><span>Mr Hassmiou Tchedre/</span>Chef de D??partement Intic</h4>
                                <p class="px-3 mb-3">Quand on a tous les outils, pour la formation, on ne peut que bien apprendre, Cette institut est bien ??quip??e</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
                        <div class="block-team-member-1 text-center rounded">
                            <figure>
                                <img src="organisation/images/1.png" alt="Image" class="img-fluid rounded-circle">
                            </figure>

                            <h5><span>Mme Bangoura Mariama Cire/</span>S??cr??taire de Bureau</h4>
                                <p class="px-3 mb-3">Quand on a tous les outils, pour la formation, on ne peut que bien apprendre, Cette institut est bien ??quip??e</p>
                        </div>
                    </div>
                </div>
                <!-- fin 2eme essai-->
            </div>
        </div>

        @include('includes.footer')
        <!-- End footer Area -->

        <script src="{{ asset('organisation/js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('organisation/js/jquery-ui.js') }}"></script>
        <script src="{{ asset('organisation/js/popper.min.js') }}"></script>
        <script src="{{ asset('organisation/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('organisation/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('organisation/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('organisation/js/jquery.sticky.js') }}"></script>
        <script src="{{ asset('organisation/js/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('organisation/js/jquery.animateNumber.min.js') }}"></script>
        <script src="{{ asset('organisation/js/aos.js') }}"></script>

        <script src="{{ asset('organisation/js/main.js') }}"></script>

</body>

</html>
