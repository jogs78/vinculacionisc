@extends('layouts.app')
@section('contentheader_title')
Lista de solicitudes para:
@endsection
@section('main-content')

<div class="container">

    @include('sweet::alert')

    <div class="row">
        <h1 class="pull-left">Vacantes</h1>
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('vacancies.create') !!}">Agregar nuevo</a>
    </div>

    <div class="row">
        @if($vacancies->isEmpty())
        <div class="well text-center">No se encontraron solicitudes de vacantes.</div>
        @else
        <div class="table-responsive">
            <table class="table" id="myTable">
                <thead>
                    <th>Posicion</th>
                    <th>Tareas a realizar</th>
                    <th>Habilidades</th>
                    <th>Área</th>
                    <th>Salario</th>
                    <th>Nombre del Contacto</th>
                    <th>Teléfono del Contacto</th>
                    <th>Correo Electrónico</th>
                    <th>Periodo</th>
                    <th width="50px">Acción</th>
                </thead>
                @foreach($vacancies as $vacancy)
               
                <tr>
                    <td>{!! $vacancy->position !!}</td>
                    <td>{!! $vacancy->task !!}</td>
                    <td>{!! $vacancy->abilities !!}</td>
                    <td>{!! $vacancy->area !!}</td>
                    <td>{!! $vacancy->salary !!}</td>
                    <td>{!! $vacancy->contact !!}</td>
                    <td>{!! $vacancy->phone !!}</td>
                    <td>{!! $vacancy->email !!}</td>
                    <td>{!! $vacancy->period !!}</td>
                    <td>
                        <a href="{!! route('vacancies.edit', [$vacancy->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                        <a href="{!! route('vacancies.delete', [$vacancy->id]) !!}" onclick="return confirm('Are you sure wants to delete this Vacancy?')"><i class="glyphicon glyphicon-remove"></i></a>
                    </td>
                </tr>
               
                @endforeach
            </table>
        </div>
        @endif
    </div>
</div>
@endsection