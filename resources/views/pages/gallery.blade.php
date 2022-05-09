@extends('layouts.acceuil')
@section('content')

		<!-- start banner Area -->
			<section class="banner-area relative about-banner" id="home">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">Gallery du CI</h1>
							<p class="text-white link-nav"><a href="{{ Route('acceuil') }}">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{ Route('contact') }}"> Contactez-Nous</a></p>
						</div>
					</div>
				</div>
            </section>

            
			<!-- Start gallery Area -->
			<section class="gallery-area section-gap">
				<div class="container">
			<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Gallery</h1>
								<div style="font-size: 19px" >
								<p>Jeudi 17/09/2020 fut un jour inoubliable pour les étudiants sortant au département Informatique de Gamal Abdel Nasser de Conakry</p>
							</div>
							</div>
						</div>
			</div>
					<div class="row">
						<div class="col-lg-7">
							<a href="img/gallery/g1.jpg" class="img-gal">
								<div class="single-imgs relative">		
									<div class="overlay overlay-bg"></div>
									<div class="relative">				
										<img class="img-fluid" src="img/gallery/g1.jpg" alt="">		
									</div>
								</div>
							</a>
						</div>
						<div class="col-lg-5">
							<a href="img/gallery/g2.jpg" class="img-gal">
								<div class="single-imgs relative">		
									<div class="overlay overlay-bg"></div>
									<div class="relative">				
										<img class="img-fluid" src="img/gallery/g2.jpg" alt="">				
									</div>
								</div>
							</a>
						</div>
						<div class="col-lg-4">
							<a href="img/gallery/g3.jpg" class="img-gal">
								<div class="single-imgs relative">		
									<div class="overlay overlay-bg"></div>
									<div class="relative">				
										<img class="img-fluid" src="img/gallery/g3.jpg" alt="">				
									</div>
								</div>
							</a>
						</div>
						<div class="col-lg-4">
							<a href="img/gallery/g4.jpg" class="img-gal">
								<div class="single-imgs relative">		
									<div class="overlay overlay-bg"></div>
									<div class="relative">					
										<img class="img-fluid" src="img/gallery/g4.jpg" alt="">				
									</div>
								</div>
							</a>
						</div>
						<div class="col-lg-4">
							<a href="img/gallery/g5.jpg"  class="img-gal">
								<div class="single-imgs relative">		
									<div class="overlay overlay-bg"></div>
									<div class="relative">					
										<img class="img-fluid" src="img/gallery/g5.jpg" alt="">				
									</div>
								</div>
							</a>
						</div>
						<div class="col-lg-5">
							<a href="img/gallery/g6.jpg" class="img-gal">
								<div class="single-imgs relative">		
									<div class="overlay overlay-bg"></div>
									<div class="relative">				
										<img class="img-fluid" src="img/gallery/g6.jpg" alt="">				
									</div>
								</div>
							 </a>
						</div>
						<div class="col-lg-7">
							<a href="img/gallery/g7.jpg" class="img-gal">
								<div class="single-imgs relative">		
									<div class="overlay overlay-bg"></div>
									<div  class="relative">					
										<img class="img-fluid" src="img/gallery/g7.jpg" alt="">				
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<div style="font-size: 19px" >
								<p>mercredi 17/09/2019 un jour exceptinelle pour les etudiants du centre Informatique à locassion dune visite a dubreka</p>
							</div>
							</div>
						</div>
			</div>
					<div class="row">
					<div class="col-lg-4">
							<a href="img/gallery/g3.jpg" class="img-gal">
								<div class="single-imgs relative">		
									<div class="overlay overlay-bg"></div>
									<div class="relative">				
										<img class="img-fluid" src="img/gallery/f1.jpg" alt="">				
									</div>
								</div>
							</a>
						</div>
						<div class="col-lg-4">
							<a href="img/gallery/g4.jpg" class="img-gal">
								<div class="single-imgs relative">		
									<div class="overlay overlay-bg"></div>
									<div class="relative">					
										<img class="img-fluid" src="img/gallery/f2.jpg" alt="">				
									</div>
								</div>
							</a>
						</div>
						<div class="col-lg-4">
							<a href="img/gallery/g5.jpg"  class="img-gal">
								<div class="single-imgs relative">		
									<div class="overlay overlay-bg"></div>
									<div class="relative">					
										<img class="img-fluid" src="img/gallery/f3.jpg" alt="">				
									</div>
								</div>
							</a>
						</div>
					
				</div>
				</div>	
			</section>
			<!-- End gallery Area -->
					
@stop
