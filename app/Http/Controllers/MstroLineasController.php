<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MstroLinea as Lineas;

class MstroLineasController extends Controller
{
   
   

    public function LineasActivas() {
        /* Noviembre 01 2019
            Consulta las lineas que se encuentran activas 
        */    
        $Lineas = Lineas::LineasActivas();
        return  $Lineas ;
      }

 


      
// Fin de clase       
}
