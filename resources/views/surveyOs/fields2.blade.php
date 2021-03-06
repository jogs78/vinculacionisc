@php
    $question = App\Models\Survey_q::find($question->id);
    $survey = $question->survey;
    $num=2;
@endphp



<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('o_text', 'Texto:') !!}
    {!! Form::text('o_text', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('o_value', 'Value:') !!}
    {!! Form::text('o_value', null, ['class' => 'form-control']) !!}
</div>


<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('survey_id', 'ID Encuesta:') !!}
    {!! Form::text('survey_id',$num, ['class' => 'form-control', 'readonly']) !!}
</div>


<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('survey_q_id', 'ID Pregunta:') !!}
    {!! Form::text('survey_q_id', $question->id, ['class' => 'form-control', 'readonly']) !!}
</div>


<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('o_status', 'Estatus:') !!}
    {!! Form::select('o_status', ['ACTIVA' => 'ACTIVA', 'INACTIVA' => 'INACTIVA'], NULL, ['class' => 'form-control']) !!}
</div>


<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
</div>

<a href="{{ url('addOptioncom') }}/{{$question->id}}" class="form-group col-sm-12">Ver las opciones</a>
