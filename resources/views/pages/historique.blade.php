@extends('layouts.acceuil')
@section('content')

		<!-- start banner Area -->
			<section class="banner-area relative about-banner" id="home">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">Historique du Centre Informatique</h1>
							<p class="text-white link-nav"><a href="{{ Route('acceuil') }}">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{ Route('contact') }}"> Contactez-Nous</a></p>
						</div>
					</div>
				</div>
            </section>
	
				
			<!-- Start event-details Area -->
			<section class="event-details-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 event-details-left">
							<div class="main-img">
								<img class="img-fluid" src="img/event-details-img.jpg" alt="">
							</div>
							<div class="details-content">
								<a href="#">
									<h4>Centre Informatique</h4>
								</a>
								<p>
                                    Fruit de la coopération Franco-Guinéenne, le Centre Informatique (C.I) de l’Université Gamal Abdel Nasser de Conakry est créé en 1989 par arrêté ministériel  N°632/MEN/DNSUP/89.
								</p>
								<p>
                                    C’est un établissement d’enseignement scientifique à caractère autonome parmi les Facultés et Instituts de l’Université de Conakry. Il est placé sous la tutelle du Recteur et est
                                    dirigé par un Directeur  Général assisté de deux adjoints chargés respectivement des Etudes pédagogiques et de la Recherche.
                                </p>
                                <p>
                                    La formation des cadres supérieurs en Informatique et  TIC. 
                                    La formation continue et perfectionnement des cadres dans les secteurs publics et privés.
                                </p>
                                <p>
                                   Le C.I. assure également le développement d’actions de coopération et de recherche au niveau national et international, la formation de formateurs en informatique.
                                </p>
                                <p>
                                    Le C.I  doit également assurer le développement d’actions de coopération et de recherche au niveau national et international, la formation de formateurs en informatique, et l’organisation d’actions de formation continue.  
                                </p>
                                <p>
                                   Le C.I doit conforter sa position de leader national pour les formations en technologies de l’information.   
                                </p>
                                <p>
                                   Le C.I doit jouer un rôle d’expertise, de veille technologique, de réflexion, de support et de conseil pour notre Université, pour le secteur public, et pour les opérateurs économiques en général et de la région en particulier   
                                </p>
                                 <h4>Objectifs generaux et specifiques </h4>
                                <p>
                                    <li>Créer des liens de partenariat avec les entreprises et sociétés de la place pour une meilleure « adéquation Formation – Emploi »</li>
                                    <li>Créer et ou renforcer les partenariats avec les Universités étrangères.</li>
                                    <li>Utiliser les TIC  comme facteur d’amélioration dans l’enseignement du LMD</li>
                                    <li>Améliorer la gestion actuelle des enseignants et des enseignements</li>
                                    <li>Gérer les enseignants et les enseignements ;</li>
                                    <li>Assurer la mobilité  des compétences ;</li>
                                    <li>Créer et/ou renforcer le partenariat Université-Entreprises</li>
                                    <li>Créer et/ou renforcer le partenariat avec les universités étrangères</li>
                                    <li>Participer à la formation des cadres en cours d’emploi dans les administrations publiques ou privées</li>
                                    <li>Gérer  les ressources humaines et matérielles ;</li>
                                    <li>Assurer la mobilité  des compétences</li>
                                    <li>Former les enseignants à la production de contenu en ligne</li>
                                    <li>Introduire progressivement la formation en ligne.</li>
                                    <li>Motiver et former le personnel</li>
                                </p>
                                <p>
                                    Les objectifs généraux et spécifiques ci-haut mentionnés ne peuvent être atteints sans la participation de tous les acteurs : Enseignants, étudiants et autres personnel d’appui.
                                     Il faudrait pour ce faire, améliorer les recettes du Centre Informatique à travers notamment :
                                    <li>les prestations de service,</li>
                                    <li>l’amélioration de la filière payante</li>
                                    <li>Toutes autres activités génératrices de revenus</li>
                                </p>
                                <p>
                                    Il faut surtout motiver le personnel enseignant.
                                </p>
                                <p>
                                    L’interaction « Encadrement – Enseignant – Etudiant » doit fonctionner au mieux de tous et de chacun.
                                </p>
							</div>
							<div class="social-nav row no-gutters">
								<div class="col-lg-6 col-md-6 ">
									<ul class="focials">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
										<li><a href="#"><i class="fa fa-behance"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-4 event-details-right">
							<div class="single-event-details">
								<h4>ARCHIVES</h4>
								<ul class="mt-10">
									<li class="justify-content-between d-flex">
										<span><img class="img-fluid" src="img/event-details-img.jpg" alt=""></span>
									</li>
									<li class="justify-content-between d-flex">
										<span>Lieu:</span>
										<span>Conakry, UGANC</span>
										<span>15 Avril, 1989</span>
									</li>														
								</ul>
							</div>	
							<div class="single-event-details">
								<h4>les premiers étudiants</h4>
								<ul class="mt-10">
									<li class="justify-content-between d-flex">
									<span><img class="img-fluid" src="img/e2.jpg" alt=""></span>
									</li>
									<li class="justify-content-between d-flex">
									<span>15 Avril, 1989</span>
										<span>Conakry, UGANC</span>
									</li>														
								</ul>
							</div>	
							<div class="single-event-details">
								<h4>Details</h4>
								<ul class="mt-10">
									<li class="justify-content-between d-flex">
										<span>Date de Creation:</span>
										<span>15 Avril, 1989</span>
									</li>
									<li class="justify-content-between d-flex">
										<span>Lieu:</span>
										<span>Conakry, UGANC</span>
									</li>														
								</ul>
							</div>		
							<div class="single-event-details">
								<h4>Details</h4>
								<ul class="mt-10">
									<li class="justify-content-between d-flex">
										<span>Date de Creation:</span>
										<span>15 Avril, 1989</span>
									</li>
									<li class="justify-content-between d-flex">
										<span>Lieu:</span>
										<span>Conakry, UGANC</span>
									</li>														
								</ul>
							</div>		
							<div class="single-event-details">
								<h4>Details</h4>
								<ul class="mt-10">
									<li class="justify-content-between d-flex">
										<span>Date de Creation:</span>
										<span>15 Avril, 1989</span>
									</li>
									<li class="justify-content-between d-flex">
										<span>Lieu:</span>
										<span>Conakry, UGANC</span>
									</li>														
								</ul>
							</div>		
							<div class="single-event-details">
								<h4>Details</h4>
								<ul class="mt-10">
									<li class="justify-content-between d-flex">
										<span>Date de Creation:</span>
										<span>15 Avril, 1989</span>
									</li>
									<li class="justify-content-between d-flex">
										<span>Lieu:</span>
										<span>Conakry, UGANC</span>
									</li>														
								</ul>
							</div>		
							<div class="single-event-details">
								<h4>Details</h4>
								<ul class="mt-10">
									<li class="justify-content-between d-flex">
										<span>Date de Creation:</span>
										<span>15 Avril, 1989</span>
									</li>
									<li class="justify-content-between d-flex">
										<span>Lieu:</span>
										<span>Conakry, UGANC</span>
									</li>														
								</ul>
							</div>
							<div class="single-event-details">
								<h4>Details</h4>
								<ul class="mt-10">
									<li class="justify-content-between d-flex">
										<span>Date de Creation:</span>
										<span>15 Avril, 1989</span>
									</li>
									<li class="justify-content-between d-flex">
										<span>Lieu:</span>
										<span>Conakry, UGANC</span>
									</li>														
								</ul>
							</div>		
							<div class="single-event-details">
								<h4>Details</h4>
								<ul class="mt-10">
									<li class="justify-content-between d-flex">
										<span>Date de Creation:</span>
										<span>15 Avril, 1989</span>
									</li>
									<li class="justify-content-between d-flex">
										<span>Lieu:</span>
										<span>Conakry, UGANC</span>
									</li>														
								</ul>
							</div>																		
						</div>
						
					</div>
				</div>	
			</section>
			<!-- End event-details Area -->


@stop

