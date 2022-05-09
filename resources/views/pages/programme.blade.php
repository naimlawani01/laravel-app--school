@extends('layouts.acceuil')
@section('content')

			<!-- start banner Area -->
			<section class="banner-area relative about-banner" id="home">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Nos Cours
							</h1>
							<p class="text-white link-nav"><a href="{{ Route('acceuil') }}">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{ Route('contact') }}"> Contactez-Nous</a></p>
						</div>
					</div>
				</div>
            </section>

			<!-- Start popular-course Area -->
			<section class="popular-course-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content mt-0 pb-20 col-lg-8">
							<div class="title text-center">
								<h2 class="mb-0">Les cours dispensés au departement Informatique </h2>
								<p>	Voici les cours qui sont enseigner au centre informatique veuillez choisir
									vous etes les Bienvenues
									</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="text-center col-md-12">
							<h3 class="btn btn-outline-danger ">Les matières de la licence 1</h3></br></br>
                        </div>
						<div class="active-popular-carusel">
							@foreach ($matiereL1 as $matiere)
                                <div class="single-popular-carusel">
								<div class="thumb-wrap relative">
									<div class="thumb relative">
										<div class="overlay overlay-bg"></div>
										<img class="img-fluid" src="{{ asset('img/'.$matiere->photo) }}" alt="">
									</div>
								</div>
								<div class="details">
									<a href="#">
										<h4>
                                            {{ $matiere->nomMat }}
										</h4>
									</a>
									<p>
                                        {{ $matiere->description }}

                                    </p>
								</div>
							</div>
                            @endforeach

						</div>
					</div>

					<div class="row">
					<div class="text-center col-md-12">
							<h3 class="btn btn-outline-danger ">Les matières de la licence 2</h3></br></br>
                    </div>
						<div class="active-popular-carusel">
							@foreach ($matiereL2 as $matiere)
                                <div class="single-popular-carusel">
								<div class="thumb-wrap relative">
									<div class="thumb relative">
										<div class="overlay overlay-bg"></div>
										<img class="img-fluid" src="{{ asset('img/'.$matiere->photo) }}" alt="">
									</div>
								</div>
								<div class="details">
									<a href="#">
										<h4>
                                            {{ $matiere->nomMat }}
										</h4>
									</a>
									<p>
                                        {{ $matiere->description }}

                                    </p>
								</div>
							</div>
                            @endforeach

						</div>
					</div>

					<div class="row">
					<div class="text-center col-md-12">
							<h3 class="btn btn-outline-primary ">Les matières de la licence 3</h3></br></br>
                    </div>
						<div class="active-popular-carusel">
							@foreach ($matiereL3 as $matiere)
                                <div class="single-popular-carusel">
								<div class="thumb-wrap relative">
									<div class="thumb relative">
										<div class="overlay overlay-bg"></div>
										<img class="img-fluid" src="{{ asset('img/'.$matiere->photo) }}" alt="">
									</div>
								</div>
								<div class="details">
									<a href="#">
										<h4>
                                            {{ $matiere->nomMat }}
										</h4>
									</a>
									<p>
                                        {{ $matiere->description }}

                                    </p>
								</div>
							</div>
                            @endforeach

						</div>
					</div>
				</div>
			</section>

@endsection
