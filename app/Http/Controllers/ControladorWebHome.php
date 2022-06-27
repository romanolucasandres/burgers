<?php

namespace App\Http\Controllers;

use App\Entidades\Sucursal;
use App\Entidades\Sistema\Patente;
use App\Entidades\Sistema\Usuario;


use Session;

class ControladorWebHome extends Controller
{
    public function index()
    {
        $sucursal= new Sucursal();
        $array_sucursales=$sucursal->obtenerTodos();
        return view("web.index", compact('array_sucursales'));
    }
}
