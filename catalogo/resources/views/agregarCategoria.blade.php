@extends('layouts.plantilla')

    @section('contenido')

        <h1>Alta de una nueva categoría</h1>

        <div class="alert bg-light p-3 col-8 mx-auto">
            <form action="/agregarCategoria" method="post">
                @csrf
                Categoría: <br>
                <input type="text" name="catNombre" class="form-control">
                <br>
                <button class="btn btn-dark mr-3">Agregar categoría</button>
                <a href="/adminCategorias" class="btn btn-outline-secondary">
                    volver a panel
                </a>
            </form>

        </div>

        @if ( $errors->any() )
            <div class="alert alert-danger">
                <ul>
                    @foreach ( $errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    @endsection
