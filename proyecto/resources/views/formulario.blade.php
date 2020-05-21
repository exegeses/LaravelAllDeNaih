@extends('layouts.plantilla')

    @section('contenido')

        <h1>Formulario de envío</h1>

        <div class="alert alert-secondary p-4">

            <form action="/proceso" method="post">
                @csrf

                Nombre:
                <br>
                <input type="text" name="nombre" class="form-control">
                <br>
                <button class="btn btn-dark">enviar</button>

            </form>

        </div>

    @endsection
