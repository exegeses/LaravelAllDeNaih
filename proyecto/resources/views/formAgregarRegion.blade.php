@extends('layouts.plantilla')

    @section('contenido')

        <h1>Alta de una nueva región</h1>

        <div class="alert alert-secondary p-3">
            <form action="/agregarRegion" method="post">
                @csrf
                Región: <br>
                <input type="text" name="regNombre" class="form-control">
                <br>
                <button class="btn btn-dark">Agregar región</button>
                <a href="/adminRegiones" class="btn btn-outline-secondary">
                    volver a panel
                </a>
            </form>
        </div>

    @endsection
