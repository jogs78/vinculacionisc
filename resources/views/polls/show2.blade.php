@extends('layouts.app')
@section('contentheader_title')
Datos de Encuesta
@endsection
@section('main-content')
@php
$polls =App\Pollscompany::where('company_id', $company->id)->get();
@endphp


<style type="text/css"> 

#contenedor{ 
background:#930; 
padding:10px; 
} 

#izquierda{ 
float:left;
padding:10px; 
color:#fff; 
width:360px; 
margin:0px; 
background:#039; 
} 

#derecha{ 
float:left;
padding:10px; 
color:#fff; 
width:360px; 
margin:0px; 
background:#039; 
} 

</style> 

<div class="container">
	
	
	<!-- Main content -->
	<section class="content">

		<div class="row">
			<div class="col-md-3">
				@include('sweet::alert')
				<!-- Profile Image -->
				<div class="box box-danger">
					<div class="box-body box-profile">
						<img class="profile-user-img img-responsive img-circle" src="{{$company->user->avatar}}" alt="User profile picture">
						<h3 class="profile-username text-center">{{$company->name }} {{$company->last_name}}</h3>
						<ul class="list-group list-group-unbordered">
							<li class="list-group-item">							
								<b>Email</b> <a href="#" class="pull-right">{{$company->user->email}}</a>
							</li>
						</div>
						<!-- /.box-body -->
					</div>
					<!-- /.box -->
					<!-- About Me Box -->
					<div class="box box-primary">
						<div class="box-header with-border">
							<h3 class="box-title">Datos Generales</h3>
						</div>
						<!-- /.box-header -->
						<div class="box-body">
							<strong><i class="fa fa-qrcode margin-r-5"></i> RFC</strong>
							<p class="text-muted">
								{{$company->rfc}}
							</p>
							<hr>
							<strong><i class="fa fa-mobile margin-r-5"></i> Teléfono celular</strong>
							<p class="text-muted">{{$company->phone}}</p>
							<hr>
							<strong><i class="fa fa-map-marker margin-r-5"></i> Dirección</strong>
							<p class="text-muted">{{$company->address}}</p>
							<hr>
						</div>
						<!-- /.box-body -->
					</div>
					<!-- /.box -->
				</div>
				<!-- /.col -->
				<div class="col-md-9">
					<div class="nav-tabs-custom">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#timeline" data-toggle="tab">Datos de Encuesta</a></li>
						</ul>
						<div class="tab-content">
							<!-- /.tab-pane -->
							<div class="active tab-pane" id="timeline">
								<!-- The timeline -->
								<ul class="timeline timeline-inverse">
									<!-- timeline time label -->
									<!-- /.timeline-label -->
									<!-- timeline item -->
									<ul class="timeline">
										<!-- timeline item -->
										<li>
											<!-- timeline icon -->
											<i class="fa fa-file bg-red"></i>
												
												<div class="timeline-item">
												

								
													<div id="izquierda" style="background-color: rgba(255, 0, 0, 0.5)"> 
														@foreach ($questions as $key => $question)


														<label for="question">{{$key + 1}}.- {{ $question->q_text }}</label><br>
													
														@endforeach
															
													</div>

													<div id="izquierda"  style="background-color: rgba(255, 0, 0, 0.5)"> 
														
														@foreach ($polls as $key => $poll)
														<label for="question">1.- {{$poll->question_4}}</label><br>
														<label for="question">2.- {{$poll->question_5}}</label><br>
														<label for="question">3.- {{$poll->question_6}}</label><br>
														<label for="question">4.- {{$poll->question_7}}</label><br>
														<label for="question">5.- {{$poll->question_8}}</label><br>
														<label for="question">6.- {{$poll->question_9}}</label><br>
														<label for="question">7.- {{$poll->question_10}}</label><br>
														<label for="question">8.- {{$poll->question_11}}</label><br>
														<label for="question">9.- {{$poll->question_12}}</label><br>
														<label for="question">10.- {{$poll->question_13}}</label><br>
														
														@endforeach	
														</div>
														
													</div>
												</div>
														<a href="{!! route('upscompany.edit', [$poll->id]) !!}" class="btn btn-default">Actualizar encuesta</a>
											</div>
										</li>
									</ul>
								</ul>
							</div>
							<!-- /.tab-pane -->
						</div>
						<!-- /.tab-content -->
					</div>
					<!-- /.nav-tabs-custom -->
				</div>
				<!-- /.col -->
			</div>
			<!-- /.row -->
		</section>
		<!-- /.content -->
		@endsection
