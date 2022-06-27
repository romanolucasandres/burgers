<?php

namespace App\Http\Controllers;

use App\Entidades\Sistema\Patente;
use App\Entidades\Sistema\Usuario;
use App\Entidades\Sucursal;
use Session;

class ControladorWebNosotros extends Controller
{
    public function index()
    {
        $sucursal= new Sucursal();
        $array_sucursales=$sucursal->obtenerTodos();
        return view("web.nosotros", compact('array_sucursales'));
    }
}
