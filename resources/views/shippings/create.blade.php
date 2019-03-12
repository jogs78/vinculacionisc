@extends('layouts.app')

@section('main-content')
<div class="container">

    @include('common.errors')


 {!! Form::open(array('route' => 'shippings.store', 'files' => true)) !!}
     

        @include('shippings.fields')

    {!! Form::close() !!}
</div>
@endsection
