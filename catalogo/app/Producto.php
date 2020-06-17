<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
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
