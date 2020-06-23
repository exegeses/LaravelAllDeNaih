<?php

namespace App\Http\Controllers;

use App\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //DB::table('categorias')->get()
        $categorias = Categoria::paginate(7);
        return view('adminCategorias', [ 'categorias'=>$categorias ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agregarCategoria');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validar
        $catNombre = $request->input('catNombre');

        $request->validate(
                        [
                            'catNombre'=>'required|min:3|max:50'
                        ]
                    );
        //guardar
        $Categoria = new Categoria;
        $Categoria->catNombre = $catNombre;
        $Categoria->save();

        //retornar magia con mensage
        return redirect('/adminCategorias')
                    ->with('mensaje', 'Categoría: '.$catNombre. ' agregada correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Categoria = Categoria::find($id);
        return view('modificarCategoria', [ 'categoria'=>$Categoria ] );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //validación
        $catNombre = $request->input('catNombre');

        $request->validate(
            [
                'catNombre'=>'required|min:3|max:50'
            ]
        );
        //obtenemos datos de la categoría enviada
        $Categoria = Categoria::find($request->input('idCategoria'));
        //asignamos atributos
        $Categoria->catNombre = $catNombre;
        //guardamos
        $Categoria->save();
        //retornar magia con mensage
        return redirect('/adminCategorias')
            ->with('mensaje', 'Categoría: '.$catNombre. ' modificada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
