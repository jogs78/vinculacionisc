@php

$company = Auth::user()->company;
$questions = App\Models\Survey_q::where('survey_id','=','2')->get();

@endphp
<div class="form-group col-sm-6 col-lg-4">
	<label for="question_1">1.- Nombre</label>
	<input type="text" value="{{$company->name}} {{$company->last_name}}" name="question_1" class="form-control" readonly>
</div>
<div class="form-group col-sm-6 col-lg-4">
	<label for="question_2">2.- Teléfono</label>
	<input type="text" value="{{$company->phone}}" name="question_2" class="form-control" readonly>
</div>
<div class="form-group col-sm-6 col-lg-4">
	<label for="question_3">3.- Dirección</label>
	<input type="text" value="{{$company->address}}" name="question_3" class="form-control" readonly>
</div>

@foreach ($questions as $key => $question)


<div class="form-group col-sm-6 col-lg-4">
	<label for="question">{{$key + 4}}.- {{ $question->q_text }}</label><br>
	@if ($question->q_format == "SELECTED" )
	@php
		$options = $question->options;
	@endphp
		<select name="question_{{$key+4}}" id="" class="form-control">
			@foreach ($options as $option)
				<option value="{{$option->o_value}}">{{$option->o_text}}</option>
			@endforeach
		</select>
	@else
	<input type="text" name="question_{{$key+4}}" class="form-control">
	@endif
</div>

@endforeach



<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar encuesta', ['class' => 'uppercase btn btn-primary']) !!}
</div>