@extends('layouts.app')

    @section('main-content')
        <div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'eventos.store', 'method'=>'POST','files'=>true]) !!}

        @include('eventos.fields')
        {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
    {!! Form::close() !!}
</div>
@endsection
