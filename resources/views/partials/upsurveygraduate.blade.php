@section('contentheader_title')
Bienvenido de Nuevo, {{Auth::user()->name}}
@endsection
@extends('layouts.app')

@section('main-content')

@php
$graduate = Auth::user()->graduate;

//$poll=App\Models\Poll::where('graduate_id',$graduate->id)->get();

@endphp

<div class="row">
	<div class="col-md-12">
		<h4 style="text-align: center;">Estimado <strong>{{ Auth::user()->name }}</strong> te invitamos a responder nuestra encuesta de seguimiento, <strong>para poder hacer uso de nuestros servicios.</strong></h4>
	</div>	
</div>
<div class="container">
	<div class="box box-primary">
		<div class="box-header with-border">
			<div class="box-body">
				@include('common.errors')

				{!! Form::model($poll,['route'=>['upencuesta.update',$poll->id],'method'=>'patch'])!!}

				@include('polls.fields-test4')

				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>
@endsection