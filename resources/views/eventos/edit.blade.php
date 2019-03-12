@extends('layouts.app')
@section('main-content')
		
    <div class="container">

         @include('flash::message')
		
		    {!!Form::model($event,['route'=> ['eventos.update',$event->id],'method'=>'PUT','files' => true])!!}
		    	
                @include('eventos.fields')
			
                {!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
			{!!Form::close()!!}

 
          

@endsection