@extends('layouts.master')
@section('title')
EMPRESAS
@endsection
@section('content')
	<aside id="fh5co-hero">
		<div class="flexslider">
			<ul class="slides">
		   	<li style="background-image: url(images/img_c_2.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1 class="heading-section">Empresas</h1>
									<p><a class="btn btn-primary btn-lg btn-learn" href="{{ url('register') }}">Comienza hoy!</a></p>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>
	
	<div id="fh5co-about">
		<div class="container">
			<div class="col-md-6 animate-box">
				<span>Acerca del seguimiento</span>
				<h2>Seguimiento a Empresas</h2>
				<p>Esta sección del Seguimiento y Vinculación de Empresas actúa como enlace entre alumnos, egresados y empresas, relaciona a egresados y alumnos del ITTG con probables fuentes de trabajo y promueve sus perfiles profesionales.</p>

				<h2>Objetivos</h2>
				<p>Promover el perfil profesional de nuestros alumnos y egresados en las empresas líderes en México.</p>
			</div>
			<div class="col-md-6">
				<img class="img-responsive" src="images/img_c_1.jpg" alt="Free HTML5 Bootstrap Template">
			</div>
		</div>
	</div>

	<div id="fh5co-counter" class="fh5co-counters" style="background-image: url(images/img_bg_4.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="row">
                    @php

                    $empresas=\App\Models\Company::count();
                    $graduate=\App\Models\Graduate::count();
                    $vacancies=\App\Models\Vacancy::count();
                    $bank=\App\Models\Residents::count();
                    
                    
                    @endphp


                    <div class="col-md-3 col-sm-6 text-center animate-box">
                        <span class="icon"><i class="icon-world"></i></span>
                        <span class="fh5co-counter js-counter" data-from="0" data-to="{{$empresas}}" ></span>
                        <span class="fh5co-counter-label">Empresas registradas</span>
                    </div>
                    <div class="col-md-3 col-sm-6 text-center animate-box">
                        <span class="icon"><i class="icon-study"></i></span>
                        <span class="fh5co-counter js-counter" data-from="0" data-to=" {{$graduate}} "></span>
                        <span class="fh5co-counter-label">Egresados registrados</span>
                    </div>
                    <div class="col-md-3 col-sm-6 text-center animate-box">
                        <span class="icon"><i class="icon-head"></i></span>
                        <span class="fh5co-counter js-counter" data-from="0" data-to=" {{$vacancies}} "></span>
                        <span class="fh5co-counter-label">Vacantes disponibles</span>
                    </div>
                    <div class="col-md-3 col-sm-6 text-center animate-box">
                        <span class="icon"><i class="icon-bulb"></i></span>
                        <span class="fh5co-counter js-counter" data-from="0" data-to=" {{$bank}} "></span>
                        <span class="fh5co-counter-label">Banco de proyectos</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

	<div id="fh5co-course-categories">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Servicios</h2>
				</div>
			</div>
			<div class="row">
			

				<div class="col-md-3 col-sm-6 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="icon-folder"></i>
						</span>
						<div class="desc">
							<h3><a href="#">Bolsa de trabajo</a></h3>
							<p>Facilita la búsqueda, prospección de empleos y fortalece la vinculación del entorno laboral con el ITTG.</p>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-6 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="icon-pen2"></i>
						</span>
						<div class="desc">
							<h3><a href="#">Solicitudes de Servicio Social</a></h3>
							<p>Nuestros alumnos se enteran de las solicitudes registradas por las empresas vinculadas con la institución .</p>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-6 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="icon-grid2"></i>
						</span>
						<div class="desc">
							<h3><a href="#">Solicitudes de Residencia Profesional</a></h3>
							<p>Nuestros alumnos obtienen solicitudes de Residencia Profesional por parte de diferentes organizaciones vinculandolos asi con el sector 
							laboral.</p>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>

	<div id="fh5co-gallery" class="fh5co-bg-section">
		<div class="row text-center">
			<h2><span>Galeria de Instagram</span></h2>
		</div>
		<div class="row">
			<div class="col-md-3 col-padded">
				<a target="_blank" href="https://www.instagram.com/p/BR6ksxUB3eF/?taken-by=tectuxtla" class="gallery" style="background-image: url(images/img_i.jpg);"></a>
			</div>
			<div class="col-md-3 col-padded">
				<a target="_blank" href="https://www.instagram.com/p/BRv7UZ5hLjT/?taken-by=tectuxtla" class="gallery" style="background-image: url(images/img_i2.jpg);"></a>
			</div>
			<div class="col-md-3 col-padded">
				<a target="_blank" href="https://www.instagram.com/p/BR8tCWCh0Mc/?taken-by=tectuxtla" class="gallery" style="background-image: url(images/img_i_3.jpg);"></a>
			</div>
			<div class="col-md-3 col-padded">
				<a  target="_blank" href="https://www.instagram.com/p/BRvgkl8h5yB/?taken-by=tectuxtla" class="gallery" style="background-image: url(images/img_i_4.jpg);"></a>
			</div>
		</div>
	</div>
@endsection
