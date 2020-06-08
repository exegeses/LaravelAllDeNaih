@extends('layouts.plantilla')

    @section('contenido')

        <h1>Modificación de un destino</h1>

        <div class="alert alert-secondary p-3">
        <form action="/modificarDestino" method="post">
            @csrf

            Nombre: <br>
            <input type="text" value="{{ $destino->destNombre }}" name="destNombre" class="form-control">
            <br>
            Región: <br>
            <select name="regID" class="form-control" required>
                <option value="{{ $destino->regID }}">{{ $destino->regNombre }}</option>
            @foreach( $regiones as $region )
                <option value="{{ $region->regID }}">{{ $region->regNombre }}</option>
            @endforeach
            </select>
            <br>
            Precio: <br>
            <input type="text" value="{{ $destino->destPrecio }}" name="destPrecio" class="form-control">
            <br>
            Asientos Totales: <br>
            <input type="text" value="{{ $destino->destAsientos }}" name="destAsientos" class="form-control">
            <br>
            Asientos Disponibles: <br>
            <input type="text" value="{{ $destino->destDisponibles }}" name="destDisponibles" class="form-control">
            <br>
            <input type="hidden" name="destID" value="{{ $destino->destID }}">
            <br>
            <button class="btn btn-dark">
                Modificar destino
            </button>
            <a href="/adminDestinos" class="btn btn-outline-secondary">
                volver a panel
            </a>
        </form>
        </div>

    @endsection
