@extends('layouts.app')
@section('title')
Proyectos DEPIS 
@endsection
@section('main-content')

<div class="container">

    @include('sweet::alert')

    <div class="row">
        <h1 class="pull-left">Proyectos DEPIS registrados</h1>
    </div>

    <div class="row">
        @if($depis==null)
        <div class="well text-center">No se encontraron proyectos DEPIS registrados.</div>
        @else
        <div class="table-responsive">
			<table class="table" id="myTable">
                <thead>
                    <th>Docente</th>
                    <th>Nombre del proyecto</th>
                    <th>Linea de investigación</th>
                    <th>Residencia</th>
                    <th>Residentes</th>
                    <th>Nombre de tesis</th>
                    <th>Nombre de tesistas</th>
                    <th>Publicaciones</th>
                    <th>Número de publicaciones</th>
                    <th>Nombre de la revista(s)</th>
                    <th>Tipo de publicación</th>
                    <th>Nombre del articulo</th>
                    <th>Prototipo</th>
                    <th>Patentes</th>
                    <th>Periodo</th>
                    <th>Otros logros</th>
                    <th width="50px">Acción</th>
                </thead>
                <tbody>

                    @foreach($depis as $depisall)

                    <tr>
                        <td>{!! $depisall->name!!} {!! $depisall->last_name!!}</td>
                        <td>{!! $depisall->name_project!!}</td>
                        <td>{!! $depisall->line_investigation!!}</td>
                        <td>{!! $depisall->name_residence!!}</td>
                        <td>{!! $depisall->names_residents!!}</td>
                        <td>{!! $depisall->name_tesis!!}</td>
                        <td>{!! $depisall->names_tesis!!}</td>
                        <td>{!! $depisall->publications!!}</td>
                        <td>{!! $depisall->publications_number!!}</td>
                        <td>{!! $depisall->name_magazine!!}</td>
                        <td>{!! $depisall->type_publication!!}</td>
                        <td>{!! $depisall->name_article!!}</td>
                        <td>{!! $depisall->prototype!!}</td>
                        <td>{!! $depisall->patents!!}</td>
                        <td>{!! $depisall->validity_of!!}</td>

                        <td>{!! $depisall->others!!}</td>
                        <td>
                        <a href="{!! route('depis.delete', [$depisall->id]) !!}" onclick="return confirm('Are you sure wants to delete this Depi?')"><i class="glyphicon glyphicon-remove"></i></a>
                        </td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
        @endif
    </div>
</div>
@endsection