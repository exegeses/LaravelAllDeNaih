@extends('layouts.plantilla')

    @section('contenido')

        <h1>Modificación de una categoría</h1>

        <div class="alert bg-light p-3 col-8 mx-auto border">
            <form action="/modificarCategoria" method="post">
                @csrf
                @method('put')
                Categoría: <br>
                <input type="text" name="catNombre" value="{{ $categoria->catNombre }}"
                       class="form-control {{ $errors->has('catNombre')?'is-invalid':'' }}">
                @if( $errors->has('catNombre') )
                    <span class="invalid-feedback">
                        Complete el campo "Categoría".
                    </span>
                @endif
                <br>
                <input type="hidden" value="{{ $categoria->idCategoria  }}" name="idCategoria">
                <button class="btn btn-dark mr-3">Modificar categoría</button>
                <a href="/adminCategorias" class="btn btn-outline-secondary">
                    volver a panel
                </a>
            </form>

        </div>

    @endsection
