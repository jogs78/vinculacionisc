@extends('layouts.app')

@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::model($surveyQ, ['route' => ['surveyQscom.update', $surveyQ->id], 'method' => 'patch']) !!}

        @include('surveyQs.fields2')

    {!! Form::close() !!}
</div>
@endsection
