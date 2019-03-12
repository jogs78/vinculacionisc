@extends('layouts.app')

@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'surveyOscom.store']) !!}
            
        @include('surveyOs.fields2')

    {!! Form::close() !!}
</div>
@endsection
