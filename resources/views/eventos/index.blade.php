@extends('layouts.app')

@section('main-content')
@section('title')
Eventos
@endsection
<div class="container">
	@include('flash::message')

	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3>Listado de eventos registrados <a href="eventos/create"><button class="btn btn-success">Nuevo</button></a></h3>
		
		</div>

		<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-hover" id="events">
					<thead>
						<th>Id</th>
						<th>Nombre</th>
						<th>Descripción</th>
						<th>Duración</th>
						<th>Fecha</th>
						<th>Direccion</th>
						<th>Tipo de Evento</th>
						<th>Imagen</th>
						<th>Operaciones</th>
					</thead>
				@foreach($eventos as $event)
				<tbody>
					<td>{{$event->id}}</td>
					<td>{{$event->name}}</td>
					<td>{{$event->description}}</td>
					<td>{{$event->duration}}</td>
					<td>{{$event->fecha}}</td>
					<td>{{$event->addres}}</td>
					<td>{{$event->type_events}}</td>
					<td>
						<img src="events/{{$event->path}}" alt="" style="width:100px;"/>
					</td>
					<td>
					{!!link_to_route('eventos.edit', $title = 'Editar', $parameters = $event->id, $attributes = ['class'=>'btn btn-primary'])!!}
					{!!Form::open(['route'=> ['eventos.destroy',$event->id],'method'=>'DELETE'])!!}
					{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
					{!!Form::close()!!}
					</td>
				</tbody>
			@endforeach			
					</table>
				</div>
				
			</div>
		</div>


	</div>


	

	@endsection