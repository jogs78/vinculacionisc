@section('contentheader_title')
Bienvenido de Nuevo, {{Auth::user()->name}}
@endsection
@php

$graduates = App\Models\Graduate::all()->count();
$companies = App\Models\Company::all()->count();
$vacancies = App\Models\Vacancy::all()->count();



$graduate = Auth::user()->graduate;

$poll     = $graduate->poll;
$periods  = App\Models\Period::pluck('description', 'description');

$answers = App\Models\Poll::where('graduate_id', $graduate->id)->get();

@endphp

@if ($answers->count() == 0)
<div class="row">
	<div class="col-md-12">
		<h4 style="text-align: center;">Estimado <strong>{{ Auth::user()->name }}</strong> te invitamos a responder nuestra encuesta de seguimiento, <strong>para poder hacer uso de nuestros servicios.</strong></h4>
	</div>	
</div>
<div class="container">
	<div class="box box-primary">
		<div class="box-header +with-border">
			<div class="box-body">
				@include('common.errors')

				{!! Form::open(['route' => 'polls.store']) !!}

				@include('polls.fields-test')

				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>
@else

<div class="row">
	<div class="col-lg-6 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-green">
			<div class="inner">
				<h3>{{$companies}}<sup style="font-size: 20px"></sup></h3>

				<p>Empresas Contratando</p>
			</div>
			<div class="icon">
				<i class="fa fa-building"></i>
			</div>
			
		</div>
	</div>
	<!-- ./col -->
	<div class="col-lg-6 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-red">
			<div class="inner">
				<h3>{{$vacancies}}</h3>

				<p>Vacantes Disponibles</p>
			</div>
			<div class="icon">
				<i class="fa fa-suitcase"></i>
			</div>
			
		</div>
	</div>
	<!-- ./col -->
</div>
<div class="col-md-6">
	<!-- DIRECT CHAT -->
	<div class="box box-warning direct-chat direct-chat-warning">
		<div class="box-header with-border">
			<h3 class="box-title">Servicio de mensajeria</h3>

			<div class="box-tools pull-right">
				<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
				</button>
			</div>
		</div>
		<!-- /.box-header -->
		@php
		Talk::setAuthUserId(Auth::user()->id);
		$threads = Talk::threads();
		@endphp
		<div class="box-body">
			<!-- Conversations are loaded here -->
			<div class="direct-chat-messages">
				<!-- Message. Default to the left -->
				@foreach ($threads as $inbox)
				@if(!is_null($inbox->thread))
				<div class="direct-chat-msg">
					<a href="{{route('message.read', ['id'=>$inbox->withUser->id])}}">
						<div class="direct-chat-info clearfix">
							<span class="direct-chat-name pull-left">{{$inbox->withUser->name}}</span>
							<span class="direct-chat-timestamp pull-right">{{$inbox->thread->humans_time}}</span>
						</div>
						<!-- /.direct-chat-info -->
						<img class="direct-chat-img" src="{{$inbox->withUser->avatar}}" alt="message user image"><!-- /.direct-chat-img -->
						<div class="direct-chat-text">
							<div class="status">
								@if(auth()->user()->id == $inbox->thread->sender->id)
								<span class="fa fa-reply"></span>
								@endif
								<span>{{substr($inbox->thread->message, 0, 30)}}...</span>
							</div>
						</div>
						<!-- /.direct-chat-text -->
					</div>
				</a>
				@endif
				@endforeach
				<!-- /.direct-chat-msg -->
			</div>
			<!--/.direct-chat-messages-->
		</div>
		<!-- /.box-body -->
	</div>
	<!--/.direct-chat -->
</div>
<!-- /.col -->
@endif