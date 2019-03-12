@section('contentheader_title')
Bienvenido de Nuevo, {{Auth::user()->name}}
@endsection

@php
$company = Auth::user()->company;
$vacancies = App\Models\Vacancy::all()->count();
$residents = App\Models\Residents::all()->count();
$service = App\Models\Service::all()->count();

$poll = $company->poll;

$answers = App\Pollscompany::where('company_id', $company->id)->get();

@endphp

@if ($answers->count() == 0)
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

				{!! Form::open(['route' => 'encuestaempresa.store']) !!}

				@include('polls.fields-test2')

				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>
@else

<?php
	$imprimir=0;
	foreach ($encuesta as $enc) {
		if (Auth::user()->id == $enc->id_empresa) {
			$imprimir=1;
		}
	}
	if ($imprimir==0) {
	?>
	<script type="text/javascript">
		window.onload = function mostrar(){
			$("#ventana").modal();
		}

	</script>
	<?php } ?>

	<div>
		<div class="modal fade" id="ventana">
			<div class="modal-dialog">
				<div class="modal-content">
					<!--Cabecera de la ventana-->
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true" name="button">&times;</button>
						<h4 class="modal-titel">Importante!!!</h4>
					</div>
					<!--cuerpo de la ventana-->
					<div class="modal-body">
						<p>Te invitamos a realizar nuestra encuesta de seguimiento para empleadores</p>
					</div>
					<!--pie de la ventana-->
					<div class="modal-footer">
						<a href="../encuesta" class="btn btn-info">Encuesta</a>
					</div>
				</div>
			</div>
		</div>
	</div>

<div class="row">
	<div class="col-lg-3 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-purple">
			<div class="inner">
				<h3>{{$vacancies}}</h3>

				<p>Vacantes Disponibles</p>
			</div>
			<div class="icon">
				<i class="fa fa-suitcase"></i>
			</div>
			<a href="{{ url('allvacancies') }}" class="small-box-footer">
				Ver <i class="fa fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>
	<div class="col-lg-3 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-black">
			<div class="inner">
				<h3>{{$residents}}</h3>

				<p>Residentes Disponibles</p>
			</div>
			<div class="icon">
				<i class="fa fa-suitcase"></i>
			</div>
			<a href="{{ url('allresidents') }}" class="small-box-footer">
				Ver <i class="fa fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>
	<div class="col-lg-3 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-primary">
			<div class="inner">
				<h3>{{$service}}</h3>

				<p>Servicio Social Disponibles</p>
			</div>
			<div class="icon">
				<i class="fa fa-suitcase"></i>
			</div>
			<a href="{{ url('allservices') }}" class="small-box-footer">
				Ver <i class="fa fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>
</div>
@endif
<!-- /.col -->