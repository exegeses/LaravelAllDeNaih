<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Marca;
use App\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //relaciones with()
        $productos = Producto::with('relMarca', 'relCategoria')->paginate(8);
        return view('adminProductos', [ 'productos'=>$productos ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //listados de marcas y de categorías
        $marcas = Marca::all();
        $categorias = Categoria::all();
        return view('agregarProducto',
                    [
                        'marcas'=>$marcas,
                        'categorias'=>$categorias
                    ]
                );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validación
        $request->validate(
                    [
                        'prdNombre'=>'required|min:5|max:70',
                        'prdPrecio'=>'required|numeric|min:0',
                        'prdPresentacion'=>'required|min:3|max:150',
                        'prdStock'=>'required|integer|min:1',
                        'prdImagen'=>'mimes:jpg,jpeg,png,gif,svg|max:2048'
                    ],
                    [
                        'prdNombre.required'=>'Complete el campo Nombre',
                        'prdNombre.min'=>'Complete el campo Nombre con al menos 5 caractéres',
                        'prdNombre.max'=>'Complete el campo Nombre con 70 caractérescomo máxino',
                        'prdPrecio.required'=>'Complete el campo Precio',
                        'prdPrecio.numeric'=>'Complete el campo Precio con un número',
                        'prdPrecio.numeric'=>'Complete el campo Precio con un número positivo',
                        'prdPresentacion.required'=>'Complete el campo Presentación'
                    ]
        );
        return 'pasó la validación';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        //
    }
}
