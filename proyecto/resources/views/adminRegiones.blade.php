@extends('layouts.plantilla')

    @section('contenido')

        <h1>Panel de administración de regiones</h1>

        @if ( session('mensaje') )
            <div class="alert alert-success">
                {{ session('mensaje') }}
            </div>
        @endif

        <table class="table table-bordered table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>id</th>
                    <th>Región</th>
                    <th colspan="2">
                        <a href="/formAgregarRegion" class="btn btn-secondary">
                            Agregar
                        </a>
                    </th>
                </tr>
            </thead>
            <tbody>
        @foreach( $regiones as $region )
                <tr>
                    <td>{{ $region->regID }}</td>
                    <td>{{ $region->regNombre }}</td>
                    <td>
                        <a href="/formModificarRegion/{{ $region->regID }}" class="btn btn-outline-secondary">
                            Modificar
                        </a>
                    </td>
                    <td>
                        <a href="/formEliminarRegion/{{ $region->regID }}" class="btn btn-outline-secondary">
                            Eliminar
                        </a>
                    </td>
                </tr>
        @endforeach
            </tbody>
        </table>

    @endsection
