@php

$questions = App\Models\Survey_q::all();
$graduate = Auth::user()->graduate;

$questions = App\Models\Survey_q::where('survey_id','=','1')->get();


$periodograduate =App\Models\Graduate::join('periods', 'graduates.id_egreso', '=', 'periods.id')
                       ->where('graduates.user_id',$graduate->user_id)
           			   ->get();	

@endphp
<div class="form-group col-sm-6 col-lg-4">
	<label for="question_1">1.- Nombre</label>
	<input type="text" value="{{$graduate->name}} {{$graduate->last_name}}" name="question_1" class="form-control" readonly>
</div>
<div class="form-group col-sm-6 col-lg-4">
	<label for="question_2">2.- Teléfono</label>
	<input type="text" value="{{$graduate->phone}}" name="question_2" class="form-control" readonly>
</div>
<div class="form-group col-sm-6 col-lg-4">
	<label for="question_3">3.- Correo</label>
	<input type="text" value="{{Auth::user()->email}}" name="question_3" class="form-control" readonly>
</div>

@foreach ($periodograduate as $periodo)
<div class="form-group col-sm-6 col-lg-4">
	<label for="question_3">4.- Periodo:</label>
	<input type="text" value="{{$periodo->description}}" name="question_4" class="form-control" readonly>
</div>
@endforeach

@foreach ($questions as $key => $question)


<div class="form-group col-sm-6 col-lg-4">
	<label for="question">{{$key + 5}}.- {{ $question->q_text }}</label>
	@if ($question->q_format == "SELECTED" )
	@php
		$options = $question->options;
	@endphp
		<select name="question_{{$key+5}}" id="" class="form-control">
			@foreach ($options as $option)
				<option value="{{$option->o_value}}">{{$option->o_text}}</option>
			@endforeach
		</select>
	@else
	<input type="text" name="question_{{$key+5}}" class="form-control">
	@endif
</div>

@endforeach



<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar encuesta', ['class' => 'uppercase btn btn-primary']) !!}
</div>