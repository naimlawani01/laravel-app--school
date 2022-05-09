@extends('layouts.acceuil')
@section('content')
<!-- start banner Area -->
	<!-- start banner Area -->
    <section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-between">
						<div class="banner-content col-lg-9 col-md-12">
							<p class="pt-10 pb-10">
                                Notre objectif est d’offir une formation de qualité aux étudiants, dans le but d’assurer leur avenir dans le domaine informatique</p>
							<a href="#" class="primary-btn text-uppercase">Nous - contacter</a>
						</div>										
					</div>
				</div>					
			</section>
<!-- End banner Area -->

<section class="feature-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="single-feature">
                    <div class="title">
                        <h4>Apprenez des cours en ligne</h4>
                    </div>
                    <div class="desc-wrap">
                        <p>
                            L’utilisation d’Internet est de plus en plus courante en raison des progrès rapides de la technologie.
                        </p>
                        <a href="http//:ci-uganc.l3..com">Veuillez nous ecrire</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-feature">
                    <div class="title">
                        <h4>Temple du savoir</h4>
                    </div>
                    <div class="desc-wrap">
                        <p>
                            Pour beaucoup d’entre nous, notre toute première expérience d’apprentissage
                             des corps célestes commence lorsque nous avons vu notre première expérience.
                        </p>
                        <a href="http//:ci-uganc.l3.com">Cliquer Ici</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-feature">
                    <div class="title">
                        <h4>Immense bibliothèque</h4>
                    </div>
                    <div class="desc-wrap">
                        <p>
                            Si vous êtes un fanatique sérieux d’informatique comme beaucoup d’entre nous, vous vous souviendrez probablement 
                            de cet événement.
                        </p>
                        <a href="http//:ci-uganc.com">Visiter Notre Biblothèque</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End feature Area -->

<!-- End cta-one Area -->

 <section >
        <div class="" >

                <div class="row  m-2 " id="article">
                    <div class="col-lg-6" id="dg">
                        <blockquote class="blockquote">
						<div class="text-center">
							<h3 class="btn btn-outline-danger ">Mot du Directeur</h3></br></br>
                        </div>
						<p class="text-white"> "Nous prévoyons de renomer le nom du Centre Informatique, de créer de nouveaux départements qui servirons de spécialités pour les étudiants, créer des formations à cour terme qui serons sanctionnées par des certificats, mettre en
                            place une formation de master en informatique." </p></br></br>
                         <footer class="blockquote-footer">DR Mamadou Lamarana Bah<br>Directeur Géneral du Centre Informatique</footer>
                        </blockquote>
                    </div>
                    <div class="col-lg-6 mb-6" id="img">   
                        <img src="organisation/images/hero_1_no-text.jpg" alt="Image"  width="103%" height="auto">
                    </div>
                    
                </div>
            </div>
</section>

<!-- Start blog Area -->
			<section class="blog-area section-gap" id="blog">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Actualités</h1>
								<p>Ce sont des informations qui derivent du centre informatique et a gamal.</p>
							</div>
						</div>
					</div>					
					<div class="row">
                    
                    @foreach ($posts as $post)
                        
						<div class="col-lg-3 col-md-6 single-blog">
							<div class="thumb">
								<img class="img-fluid" src="{{ asset('img/'.$post->image) }}" alt="">								
							</div>
							<p class="meta">25 juillet, 2020  | <a href="#">Uganc</a></p>
							<a href="blog-single.html">
								<h5>{{ $post->title }}</h5>
							</a>
							<p>
                               {{ $post->content }}     
                            </p>
							<a href="#" class="details-btn d-flex justify-content-center align-items-center"><span class="details">Details</span><span class="lnr lnr-arrow-right"></span></a>		
						</div>
                    @endforeach							
					</div>
				</div>	
			</section>
			<!-- End blog Area -->			
<section class="search-course-area relative">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row justify-content-between align-items-center">
						<div class="col-lg-6 col-md-6 search-course-left">
							<h1 class="text-white">
								Que pensez-vous du centre informatique ?
							</h1>
							<p>
                                Vous pouvez donner vos avis à travers ce formulaire
							</p>
							<div class="row details-content">
								<div class="col single-detials">
									<span class="lnr lnr-graduation-hat"></span>
									<a href="#"><h4>Cours en ligne</h4></a>		
									<p>
										l’utilisation de l’internet est un dévenue un moyen dans l’apprentissage.
									</p>						
								</div>
								<div class="col single-detials">
									<span class="lnr lnr-license"></span>
									<a href="#"><h4>Certification</h4></a>		
									<p>
										Nous vous donnons des certificats réconnus dans nos différents pays partenaires.
									</p>						
								</div>								
							</div>
						</div>
						<div class="col-lg-4 col-md-6 search-course-right section-gap">
							<form class="form-wrap" action="#">
								<h4 class="text-white pb-20 text-center mb-30">Formation</h4>		
								<input type="text" class="form-control" name="name" placeholder="Nom" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Name'">
								<input type="phone" class="form-control" name="phone" placeholder="Numero" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Phone Number'">
								<input type="email" class="form-control" name="email" placeholder="mail" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address'">
								<div class="form-select" id="service-select">
									<select style="display: none;">
										<option datd-display="">Choix des cours </option>
										<option value="1">Informatique de base</option>
										<option value="2">Maintenance</option>
										<option value="3">Linux</option>
										<option value="4">Anglais</option>
									</select><div class="nice-select" tabindex="0"><span class="current">Choose Course</span><ul class="list"><li data-value="Choose Course" class="option selected">Choose Course</li><li data-value="1" class="option">Course One</li><li data-value="2" class="option">Course Two</li><li data-value="3" class="option">Course Three</li><li data-value="4" class="option">Course Four</li></ul></div>
								</div>									
								<button class="primary-btn text-uppercase">Submit</button>
							</form>
						</div>
					</div>
				</div>	
			</section>


<!-- Start cta-two Area -->
<section class="cta-two-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 cta-left">
                <h3>Pour plus d’info veuillez nous contactez</h3>
            </div>
            <div class="col-lg-4 cta-right">
                <a class="primary-btn wh" href="{{ route('contact') }}">cliquer ici</a>
            </div>
        </div>
    </div>
</section>
<!-- End cta-two Area -->
@endsection
