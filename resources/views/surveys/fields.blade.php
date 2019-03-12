<!--- Survey Title Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('survey_title', 'Titulo:') !!}
    {!! Form::text('survey_title', null, ['class' => 'form-control']) !!}
</div>

<!--- Survey Text Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('survey_text', 'Descripción:') !!}
    {!! Form::text('survey_text', null, ['class' => 'form-control']) !!}
</div>


<!--- Survey Status Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('type_encuesta', 'Encuesta para egresado(1) para empresa (2):') !!}
    {!! Form::select('type_encuesta', ['1'=>'Egresados', '2'=>'Empresas'], null, ['class' => 'form-control']) !!}
</div>

<!--- Survey Status Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('survey_status', 'Estatus:') !!}
    {!! Form::select('survey_status', ['ACTIVA'=>'ACTIVA', 'INACTIVA'=>'INACTIVA'], null, ['class' => 'form-control']) !!}
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'uppercase btn btn-primary']) !!}
</div>
