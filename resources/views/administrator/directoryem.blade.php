@extends('layouts.app')

@section('main-content')
@section('title')
Directorio Empresas
@endsection
<div class="container">

    @include('sweet::alert')

    <div class="row">
        <h1 class="pull-left">Directorio de Empresas</h1>
    </div>
    <div id="search">
        <div class="row">
            @if($company->isEmpty())
            <div class="well text-center">Empresas no encontradas.</div>
            @else
            <table class="table table-hover" id="company">
                <thead>
                    <th>Nombre(s)</th>
                    <th>Sector</th>
                    <th>Dirección</th>
                    <th>Telefóno</th>
                    <th>Director</th>
                    <th>Contacto</th>
                </thead>
                <tbody>
                    @foreach($company as $compay)
                    <tr class="success">
                        <td>{!! $compay->name!!}</td>
                        <td>{!!$compay->sector!!}</td>
                        <td>{!! $compay->address!!}</td>
                        <td>{!! $compay->phone!!}</td>
                        <td>{!! $compay->director!!}</td>
                        <td>{!! $compay->contact!!}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @endif
        </div>
    </div>
</div>
@endsection