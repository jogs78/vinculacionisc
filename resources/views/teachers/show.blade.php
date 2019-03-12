@extends('layouts.app')

@section('main-content')
<div class="container">
  <section class="content">

		<div class="row">
			<div class="col-md-">
				@include('sweet::alert')
				
				<div class="col-md-9">
					<div class="nav-tabs-custom">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#timeline" data-toggle="tab">Datos</a></li>
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
											<i class="fa fa-user bg-blue"></i>
											<div class="timeline-item">
												<span class="time"> Creado el: {{$teacher->created_at}}</span>

												<h3 class="timeline-header"><a>Datos Generales</a></h3>

												<div class="timeline-body">            		
													<strong>Nombre:</strong>{{ $teacher->name}}<br>
													<strong>Apellidos:</strong>{{ $teacher->last_name}}<br>
													<strong>Celular:</strong> {{ $teacher->phone}} <br>
													<strong>Email:</strong> {{ $teacher->user->email}} <br>	
													<strong>RFC:</strong> {{ $teacher->rfc}} <br>
												</div>
												<a href="{!! route('teachers.edit', [$teacher->id]) !!}" class="btn btn-default">Editar</a>
											</div>
										</li>
										<!-- timeline item -->
										<li>
											<!-- timeline icon -->
											<i class="fa fa-suitcase bg-red"></i>
											
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









</div>
@endsection
