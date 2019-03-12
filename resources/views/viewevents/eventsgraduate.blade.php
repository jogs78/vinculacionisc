@extends('layouts.app')
@section('contentheader_title')
Eventos
@endsection
@section('main-content')
@section('title')
Eventos y más
@endsection


	<div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Eventos, Conferencias, Cursos, Talleres, Diplomados, Etc.
                        </div>
                        @include('viewevents.search2')
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
</div>


@endsection