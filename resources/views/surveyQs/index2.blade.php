@extends('layouts.app')

@section('main-content')
@section('title')
Preguntas
@endsection

<div class="container">

    @include('sweet::alert')

    <div class="row">
        <h1 class="pull-left">Preguntas de la encuesta a Empresas</h1>
    </div>

    <div class="row">
        @if($surveyQs==0)
        <div class="well text-center">Esta encuesta no cuenta con preguntas.</div>
        @else
        <table class="table" id="myTable">
            <thead>
                <th>Formato</th>
                <th>Texto</th>
                <th>Creado por</th>
                <th>Estatus</th>
                <th>Opciones</th>
                <th width="50px">Acción</th>
            </thead>
            <tbody>

                @foreach($surveyQs as $surveyQ)
                <tr>
                    <td>{!! $surveyQ->q_format !!}</td>
                    <td>{!! $surveyQ->q_text !!}</td>
                    <td>{!! $surveyQ->q_createdby !!}</td>
                    <td>{!! $surveyQ->q_status !!}</td>
                    <td>
                        @if ($surveyQ->q_format == "SELECTED")
                    <a href="{{ url('addOptioncom') }}/{{$surveyQ->id}}" class="btn bg-teal btn-lg">Agregar</a>
                    @else
                    <button class="btn bg-navy btn-lg">Inhabilitado</button>
                    @endif
                </td>
                <td>
                    <a href="{!! route('surveyQscom.edit', [$surveyQ->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                    <a href="{!! route('surveyQs.delete', [$surveyQ->id]) !!}" onclick="return confirm('¿Esta seguro de eliminar esta pregunta?')"><i class="glyphicon glyphicon-remove"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>
</div>
@endsection