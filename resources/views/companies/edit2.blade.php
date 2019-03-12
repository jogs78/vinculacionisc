@extends('layouts.app')
@php
$companys = Auth::user()->company;
@endphp
@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::model($company, ['route' => ['company2.update', $companys->id], 'method' => 'patch']) !!}

        @include('companies.fields2')

    {!! Form::close() !!}
    
</div>
@endsection
