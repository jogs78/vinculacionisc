@extends('layouts.app')

@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::model($surveyO, ['route' => ['surveyOscom.update', $surveyO->id], 'method' => 'patch']) !!}

        @include('surveyOs.fields2')

    {!! Form::close() !!}
</div>
@endsection
