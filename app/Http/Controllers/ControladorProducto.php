<?php

namespace App\Http\Controllers;

use App\Entidades\Sistema\Producto; //include_once "app/Entidades/Sistema/Menu.php";
use App\Entidades\Sistema\Patente;
use App\Entidades\Sistema\Usuario;
use Illuminate\Http\Request;

require app_path() . '/start/constants.php';

class ControladorProducto extends Controller
{
      public function nuevo(){
            $titulo = "Nuevo producto";
            return view("producto.producto-nuevo", compact('titulo'));
}
}