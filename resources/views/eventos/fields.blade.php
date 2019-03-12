
<div class="form-group col-sm-6 col-lg-4 col-sm-6 col-lg-4">
	{!!Form::label('name','Nombre:')!!}
	{!!Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Ingresa el Nombre del evento'])!!}
</div>
<div class="form-group col-sm-6 col-lg-4">
	{!!Form::label('description','Descripción del evento:')!!}
	{!!Form::text('description',null,['class'=>'form-control', 'placeholder'=>'Ingresar la descripción del evento'])!!}
</div>

<div class="form-group col-sm-6 col-lg-4">
	{!!Form::label('fecha','Fecha del evento (MM/DD/AAAA):')!!}
	{!!Form::text('fecha',null,['class'=>'form-control', 'placeholder'=>'Fecha del evento'])!!}
</div>

<div class="form-group col-sm-6 col-lg-4">
	{!!Form::label('addres','Dirección:')!!}
	{!!Form::text('addres',null,['class'=>'form-control', 'placeholder'=>'Lugar y dirección'])!!}
</div>
<div class="form-group col-sm-6 col-lg-4">
	{!!Form::label('Duration','Duración:')!!}
	{!!Form::text('duration',null,['class'=>'form-control', 'placeholder'=>'Ingresa la duración'])!!}
</div>


<div class="form-group col-sm-6 col-lg-4">
	{!!Form::label('path','Imagen:')!!}
	{!!Form::file('path')!!}
</div>

<div class="form-group" >
	{!! Form::label ( ' type_events ' , ' Tipo de evento ' ) !!}
	{!! Form::select('type_events',['Cursos' => 'Cursos', 'Talleres' =>'Talleres', 'Diplomados' =>'Diplomados','Conferencias'=>'Conferencias','Eventos'=>'Eventos'], null, ['class' => 'form-control'])!!}
</ div >