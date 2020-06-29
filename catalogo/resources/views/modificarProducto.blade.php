@extends('layouts.plantilla')

@section('contenido')


        <h1>Formulario de modificación de un producto</h1>

        <div class="alert bg-light p-3 border">
            <form action="/modificarProducto" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                Nombre: <br>
                <input type="text"
                       value="{{ old( 'prdNombre', $producto->prdNombre ) }}"
                       name="prdNombre" class="form-control">
                <br>
                Precio: <br>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">$</div>
                    </div>
                    <input type="number"
                           value="{{ old('prdPrecio' , $producto->prdPrecio ) }}"
                           name="prdPrecio" class="form-control">
                </div>
                <br>
                Marca: <br>
                <select name="idMarca" class="form-control" required>
                    <option value="{{ $producto->relMarca->idMarca }}">{{ $producto->relMarca->mkNombre }}</option>
            @foreach( $marcas as $marca )
                    <option {{ ( old('idMarca')==$marca->idMarca )?'selected':'' }} value="{{ $marca->idMarca }}">{{ $marca->mkNombre }}</option>
            @endforeach
                </select>
                <br>
                Categoría: <br>
                <select name="idCategoria" class="form-control" required>
                    <option value="{{ $producto->relCategoria->idCategoria }}">{{ $producto->relCategoria->catNombre }}</option>
            @foreach( $categorias as $categoria )
                    <option {{ ( old('idCategoria')==$categoria->idCategoria )?'selected':'' }} value="{{ $categoria->idCategoria }}">{{ $categoria->catNombre }}</option>
            @endforeach
                </select>
                <br>
                Presentacion: <br>
                <textarea name="prdPresentacion" class="form-control">{{ old('prdPresentacion', $producto->prdPresentacion ) }}</textarea>
                <br>
                Stock: <br>
                <input type="number"
                       value="{{ old('prdStock', $producto->prdStock ) }}"
                       name="prdStock" class="form-control" min="0">
                <br>
                Imagen original: <br>
                <img src="/productos/{{ $producto->prdImagen }}" class="img-thumbnail">
                <br>
                <input type="file" name="prdImagen" class="form-control-file">
                <br>
                <input type="hidden" value="{{ $producto->idProducto }}" name="idProducto">
                <input type="hidden" value="{{ $producto->prdImagen }}" name="imagenOriginal">
                <input type="submit" value="Modificar Producto" class="btn btn-secondary mb-3">
                <a href="/adminProductos" class="btn btn-light mb-3">Volver al panel de Productos</a>
            </form>

        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

   @endsection

