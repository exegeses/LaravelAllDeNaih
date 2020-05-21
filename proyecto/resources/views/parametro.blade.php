@extends('layouts.plantilla')

    @section('contenido')

        <h1>Parámetros en una petición</h1>

            en una url:
        <a href="https://www.google.com/search?q=gato+rojo">
            buscar gato rojo
        </a>
        <br>
        desde el enrutador: {{ $id }}

    @endsection
