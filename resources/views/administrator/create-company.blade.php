@extends('layouts.app')
@section('title')
Crear Empresas
@endsection
@section('main-content')
<div class="container">

    @include('common.errors')

   {!! Form::open(['url' => 'create-company']) !!}

        @include('administrator.fields-company')

    {!! Form::close() !!}
</div>
@endsection
