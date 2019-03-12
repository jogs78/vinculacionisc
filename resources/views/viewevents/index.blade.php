@extends('layouts.master')
@section('title')
EVENTOS
@endsection
@section('content')
	<aside id="fh5co-hero">
		<div class="flexslider">
			<ul class="slides">
		   	<li style="background-image: url(images/eventohome.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1 class="heading-section">Eventos y más</h1>
									<h2>Te invitamos a asistir a nuestros Eventos, Conferencias, Diplomados, Talleres y Cursos</h2>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>

<div>
	

	<div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Eventos, Conferencias, Cursos, Talleres, Diplomados, Etc.
                        </div>
                        @include('viewevents.search')
								<div class="panel-body">
                        		<div class="row">
                            		@foreach($eventos as $events)
                            		<div class="col-sm-6 col-md-4  ">
                                		<div class="thumbnail" height="200" width="200">
                                    		<img src="events/{{$events->path}}" alt="{{$events->name}}" class="img-responsive" height="200" width="200">
                                    			<div class="panel-footer">
													<h3>Evento</h3><h3>{{$events->name}}</h3>
                                        			<h3>Descripción</h3><h3>{{$events->description}}</h3>
													<h3>Duración</h3><h3>{{$events->duration}}</h3>
													<h3>Fecha</h3><h3>{{$events->fecha}}</h3>
													<h3>Lugar del evento</h3><h3>{{$events->addres}}</h3>
													
                                    			</div>
                                		</div>
									</div>
                            		@endforeach
								</div>
                        {{$eventos->render()}}
							</div>
				</div>
	</div>
@endsection
</div>