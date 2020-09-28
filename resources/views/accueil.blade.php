@extends('layouts.master')


@section('content')
<img src="{{asset('assets/photo/Logo.png')}}">
			<h1 style="display: inline;font-size: 80px;">Dev Web</h1>
	  <div class="content">
                <section>
            <article>
            <div class="container"><h2>C'est quoi le dévleppement web ?</h2></div>
            <div class="row">
                <img src="{{asset('assets/photo/Photo.jpg')}}" class="col-lg-6 col-xs-12" height="350px">
                <div class="col-xs-12 col-lg-6">
                    <p>La programmation web peut prendre différentes formes : de la simple page statique à la page dynamique avec connexion à une base de données.<br>
                    Les langages de programation web les plus utiliser:<br>
                     La base des sites : HTML et CSS. <br>
                     L’ajout de dynamisme : le javascript. <br>
                     Le PHP et SQL pour la programation sérveur. <br>
                    </p>
                </div>
            </div>
            </article>
        </section>
        <hr>	
        <hr>
		<section>
		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img src="{{asset('assets/photo/photo1.jpg')}}" alt="HTmlCssJs" class="img-responsive" width="99%">
		    </div>
		    <div class="carousel-item">
		      <img src="{{asset('assets/photo/photo2.jpg')}}" alt="PhpSql" class="img-responsive" width="99%">
		    </div>
		    <div class="carousel-item">
		      <img src="{{asset('assets/photo/photo3.jpg')}}" alt="ASP.Net" class="img-responsive" width="99%">
		    </div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
		
		</section>

@endsection