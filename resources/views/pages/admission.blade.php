@extends('layouts.acceuil')
@section('content')

		<!-- start banner Area -->
			<section class="banner-area relative about-banner" id="home">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">Admission</h1>
							<p class="text-white link-nav"><a href="{{ Route('acceuil') }}">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{ Route('contact') }}"> Contactez-Nous</a></p>
						</div>
					</div>
				</div>
            </section>

            <!-- Start post-content Area -->
			<section class="post-content-area single-post-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 posts-list">
							<div class="single-post row">
								<div class="col-lg-10 col-md-10">
									<h3 class="mt-20 mb-20 text-lg-center text-btn btn-outline-warning">LICENCE</h3>
                                    <div class="col8 last">
										<div style="font-size: 19px" >
                                        <ul class="puce2 lh1em2 fwb">
                                            <p>	
                                                L’accès aux bourses d’études et d’entretien est ouvert à tous les élèves détenteurs du baccalauréat unique ou de tout autre diplôme reconnu équivalent.									
                                            </p>
                                            <p>	
                                                Le bénéfice de ces bourses dans les programmes de formations de licence se fait par ordre de mérite conformément aux résultats du concours de sélection et d’orientation organisé par la conférence des Recteurs et Directeurs généraux (CRDG).									
                                            </p>
                                            <p>	
                                                Les inscriptions sont annuelles et se font au service de la scolarité sur la base de présentation d’un dossier comprenant :									
                                            </p>
                                            <li>1° Un extrait d’acte de naissance</li>
                                            <li>2° Un certificat de visite et contre visite</li>
                                            <li>3° Quatre photos d’identité</li>
                                            <li>4° Attestation baccalauréat unique ou de tout autre diplôme reconnu équivalent</li>
                                            <li>5° L’attestation d’admission délivrée par la DPE/DCE d’origine</li>
                                            <li>6° L’acte d’engagement à respecter les règlements de l’université</li>
                                            
                                            <li></li>
                                            
                                        </ul>
									</div>
                                    </div>
								</div>
						<div class="col-lg-10 col-md-10">
									<div class="quotes">
                                       <h3 class="mt-20 mb-20 text-center text-btn btn-outline-warning">MASTER/DES</h3>
                                    </div>
                         </div>
                    </div>

                            <div>
                                <div style="font-size: 19px" >
                                <p>
                                    L’accès aux études de deuxième cycle (Master/DESS/DES) est ouvert aux titulaires d’un diplôme de licence ou de tout autre diplôme reconnu équivalent obtenu avec au moins la mention bien, remarquable ou honorable.
                                </p>
                                <p>
                                    L’admission se fait sur la base de l’examen d’un dossier de candidature déposé auprès du service des études avancées(SEA) et d’un examen probatoire.
                                </p>
                                <p>
                                    L’inscription est annuelle et se fait exclusivement au service des études avancées (SEA) et sur présentation d’un dossier indiqué par ledit  service
                                </p>
                               </div>
                           </div>

						</div>
						<div class="col-lg-4 sidebar-widgets">
							<div class="widget-wrap">
								<div class="single-sidebar-widget user-info-widget">
									<img src="img/logo.svg" alt="" width="170px">
									<a class="btn btn-outline-danger" href="{{ Route('formulaire') }}" target="_blank">Faire une demande <br><span class="txt29 lh1em txtgras">admission</span></a>
                                </div>

						</div>
					</div>
				</div>
			</section>
				<!-- Start course-mission Area -->
			<section class="course-mission-area pb-0">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-20 col-lg-12">
							
							<div class="title text-center">
							</br>	<h3 class="mb-0">FRAIS D’INSCRIPTION ET DE REINSCRIPTION</h3>
							</div>
						</div>
					</div>							
                    <div class="row">
                        <div class="col-md-10 accordion-left">

                            <!-- accordion 2 start-->
                            <dl class="accordion">
                                <dt>
                                    <a href="">FRAIS INSCRIPTION</a>
                                </dt>
                                <dd>
                                   
                                
                                   <p> –  Frais d’inscription (nationaux) :  15.000 </p>
                                   <p> –  Frais d’inscription à la formation payant</p>

                                            <p>  Nationaux :  35.0000 </p>

                                            <p>  Etrangers :  300.000 </p>

                                            <p>  Recyclés :   200.000 </p>
                                                
                                </dd>
                                <dt>
                                    <a href="">FRAIS DE REINSCRIPTION</a>
                                </dt>
                                <dd>
                                   <p> –  Frais de réinscription (nationaux) :  10.000 </p>
                                   <p> –  Frais de réinscription à la formation payant</p>

                                            <p>  Nationaux :  25.0000 </p>

                                            <p>  Etrangers :  200.000 </p>

                                            <p>  Recyclés :   100.000 </p>    
                                </dd>
                                <dt>
                                    <a href="">FRAIS DE SCOLARITE  A L’INSCRIPTION</a>
                                </dt>
                                <dd>
                                   <p> –  Formation payante Centre Informatique</p>

                                            <p>  Nationaux :   3.475.000 </p>

                                            <p>  Etrangers :   4.700.000 </p>

                                            <p>  Recyclés :   2.8000.00 </p>    
                                </dd>
                                  <dt>
                                    <a href="">FRAIS DE SCOLARITE  A LA REINSCRIPTION</a>
                                </dt>
                                <dd>
                                   <p> –  Formation payante Centre Informatique</p>

                                            <p>  Nationaux :   3.475.000 </p>

                                            <p>  Etrangers :   4.700.000 </p>

                                            <p>  Recyclés :   2.8000.00 </p>    
                                </dd>
                                <dt>
                                    <a href="">FRAIS D’ETUDES DES DOSSIERS : 75.000</a>
                                </dt>
                                                                 
                            </dl>
                            
                            <!-- accordion 2 end-->
                        </div>
                       
                    </div>
				</div>	
			</section>
			<!-- End course-mission Area -->

            </section>

@endsection
