@section('contentheader_title')
Bienvenido de Nuevo, {{Auth::user()->name}}
@endsection
@extends('layouts.app')

@section('main-content')

@php
$company = Auth::user()->company;

//$poll=App\Models\Poll::where('company_id',$company->id)->get();

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

				{!! Form::model($poll,['route'=>['upscompany.update',$poll->id],'method'=>'patch'])!!}

				@include('polls.fields-test3')

				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>
@endsection