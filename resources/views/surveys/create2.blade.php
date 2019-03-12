@extends('layouts.app')

@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'surveyscom.store']) !!}

        @include('surveys.fields')

    {!! Form::close() !!}
</div>
@endsection
