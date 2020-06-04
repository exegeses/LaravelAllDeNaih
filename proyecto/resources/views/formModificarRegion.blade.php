@extends('layouts.plantilla')

    @section('contenido')

        <h1>Modificación de una región</h1>

        <div class="alert alert-secondary p-3">
            <form action="/modificarRegion" method="post">
                @csrf
                Región: <br>
                <input type="text" value="{{ $region->regNombre }}" name="regNombre" class="form-control">
                <input type="hidden" value="{{ $region->regID }}" name="regiID">
                <br>
                <button class="btn btn-dark">Modificar región</button>
                <a href="/adminRegiones" class="btn btn-outline-secondary">
                    volver a panel
                </a>
            </form>
        </div>

    @endsection
