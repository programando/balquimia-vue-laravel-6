<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Producto as Productos;

use Cache;

class ProductosController extends Controller
{

    public function masVendidosUltimosSeisMeses() {
        $Response = Cache::tags('masVendidosUltimosSeisMeses' )->rememberForever('masVendidosUltimosSeisMeses', function()  {
            return  Productos::masVendidosUltimosSeisMeses();
         });
         return $Response;
    }

}
