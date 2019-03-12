@extends('layouts.app')

@section('main-content')
@section('title')
Encuesta de Empresas
@endsection

<div class="container">

    @include('flash::message')
    @include('sweet::alert')

    <div class="row">
        <h1 class="pull-left">Encuesta de Empresas</h1>
        <a class="uppercase btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('surveyscom.create') !!}">Agregar nueva</a>
    </div>

    <div class="row">
        @if($surveyscomp==0)
        <div class="well text-center">No hay Encuestas guardadas.</div>
        
        @else
        <table class="table" id="myTable">
            <thead>
                <th>Titulo</th>
                <th>Descripción</th>
                <th>Estatus</th>
                <th>Tipo de encuesta</th>
                <th>Preguntas</th>
                <th width="50px">Acción</th>
            </thead>
            <tbody>
                @foreach($surveyscomp as $survey)
                @include('surveys.addModal2')
                <tr class="success">
                    <td>{!! $survey->survey_title !!}</td>
                    <td>{!! $survey->survey_text !!}</td>
                    <td>{!! $survey->survey_status !!}</td>
                    <td>{!! $survey->type_encuesta !!}</td>
                     <td>
                        <button 
                        type="button" 
                        class="btn btn-primary btn-lg" 
                        data-toggle="modal" 
                        data-target="#addModal">
                        Agregar
                    </button>
                    <a href="{{ url('viewQuestionsemp') }}/{{ $survey->id }}" class="btn bg-teal btn-lg">Ver</a>
                </td>
                <td>
                    <a href="{!! route('surveyscom.edit', [$survey->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                   <a href="{!! route('surveyscom.delete', [$survey->id]) !!}" onclick="return confirm('Are you sure wants to delete this Survey?')"><i class="glyphicon glyphicon-remove"></i></a>
              
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>
</div>
@endsection