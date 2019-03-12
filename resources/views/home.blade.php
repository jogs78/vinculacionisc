@extends('layouts.app')
@section('title')
Inicio
@endsection
@section('htmlheader_title')
Home
@endsection


@section('main-content')
<div class="container spark-screen">
	<div class="row">
		<div class="row">

			@role('coordinador')
				@include('partials.home-admin')
			@endrole
			
			@role('graduate')
				@include('partials.home-graduate')
			@endrole
			
			@role('company')
				@include('partials.home-company')
			@endrole	
			
			@role('teacher')
				@include('partials.home-docent')
			@endrole
			<!-- /.col -->

		</div>
		<!-- /.row -->
	</div>
</div>
@endsection
