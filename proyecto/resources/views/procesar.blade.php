@extends('layouts.plantilla')

    @section('contenido')
        <h1>Proceso de datos con estructuras blade</h1>

        Tu nombre es: {{ $nombre }}

        <br>
        <h2>condicional</h2>

        @if( $numero < 5 )

            es menor

        @else

            no es menor

        @endif

        <h2>Bucle</h2>

        <ul class="list-group">
        @for( $i=0; $i < $numero; $i++ )
            <li class="list-group-item">
                {{ $i }}
            </li>
        @endfor
        </ul>




    @endsection
