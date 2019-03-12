@extends('layouts.app')
@section('title')
Servicio Social
@endsection
@section('main-content')

<div class="container">

    @include('sweet::alert')

    <div class="row">
        <h1 class="pull-left">Solicitudes Servicio Social de Empresa</h1>
    </div>

    <div class="row">
        @if($services->isEmpty())
        <div class="well text-center">No se encontraron solicitudes de servicio social.</div>
        @else
        <div class="table-responsive">
            <table class="table" id="allservice">
                <thead>
                	<th>Compañia</th>
                    <th>Tareas a realiza</th>
                    <th>Área</th>
                    <th>Correo Electrónico</th>
                    <th>Periodo</th>
                     @role('coordinador')
                    <th width="50px">Acción</th>
                    @endrole
                </thead>
                <tbody>

                    @foreach($services as $service)
                    <tr>
                    	<td>{!! $service->name !!}</td>
                        <td>{!! $service->task !!}</td>
                        <td>{!! $service->area !!}</td>
                        <td>{!! $service->contact !!}</td>
                        <td>{!! $service->period !!}</td>
                         @role('coordinador')
                        <td>
                            <a href="{!! route('services.delete', [$service->id]) !!}" onclick="return confirm('Are you sure wants to delete this Service?')"><i class="glyphicon glyphicon-remove"></i></a>
                        </td>
                        @endrole
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endif
    </div>
</div>
@endsection