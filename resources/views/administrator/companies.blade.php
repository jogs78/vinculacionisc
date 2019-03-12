@extends('layouts.app')
@section('title')
Empresas
@endsection
@section('main-content')

<div class="container">

    @include('flash::message')

    <div class="row">
        <h1 class="pull-left">Empresas</h1>
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{{ url('create-company') }}">Add New</a>
    </div>

    <div class="row">
        @if($companies->isEmpty())
        <div class="well text-center">No se encontraron empresas</div>
        @else
        <table class="table" id="allcompany">
            <thead>
                <th>Nombre</th>
                <th>Director</th>
                <th>Contacto</th>
                <th>Telefono para contactar</th>
                <th>Ver</th>
                <th width="50px">Acción</th>
            </thead>
            <tbody>

                @foreach($companies as $company)
                <tr>
                    <td>{!! $company->name !!}</td>
                    <td>{!! $company->director !!}</td>
                    <td>{!! $company->contact !!}</td>
                    <td>{!! $company->phone!!}</td>
                    <td>
                      <a href="{!! url('viewcompany', [$company->id]) !!}" class="btn btn-block bg-navy">Perfil</a>
                      <a href="{!! url('viewtestcompany', [$company->id]) !!}" class="btn btn-block bg-orange">Encuesta</a>
                  </td>
                  <td>
                    <a href="{!! route('companies.delete', [$company->id]) !!}" class="btn bg-red" onclick="return confirm('¿Estas seguro de eliminar a esta Empresa?')"><i class="fa fa-trash"></i> Eliminar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>
</div>
@endsection