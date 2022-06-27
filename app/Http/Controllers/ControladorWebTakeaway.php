<?php

namespace App\Http\Controllers;


use App\Entidades\Producto;
use App\Entidades\Sistema\Patente;
use App\Entidades\Sistema\Usuario;
use Session;

class ControladorWebtakeaway extends Controller
{
    public function index()
    {
        $producto = new Producto();
        $array_productos=$producto->obtenerTodos();
        return view("web.takeaway", compact('array_productos'));
    }
}
