<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $primaryKey = 'idProducto';
    public $timestamps = false;
    protected $guarded = [];
    ##relación a tabla marcas
    public function relMarca()
    {
        return $this->belongsTo('\App\Marca', 'idMarca', 'idMarca');
    }

    ##relación a tabla categorias
    public function relCategoria()
    {
        return $this->belongsTo('\App\Categoria', 'idCategoria', 'idCategoria');
    }
}
