<?php

namespace App\Http\Controllers;

use App\Entidades\Pedido;
use App\Entidades\Sistema\Patente;
use App\Entidades\Sistema\Usuario;
use Illuminate\Http\Request;

require app_path() . '/start/constants.php';

class ControladorPedido extends Controller
{
      public function index(){
      $titulo = "Pedido";
      if (Usuario::autenticado() == true) {
            if (!Patente::autorizarOperacion("MENUCONSULTA")) {
                $codigo = "MENUCONSULTA";
                $mensaje = "No tiene permisos para la operaci&oacute;n.";
                return view('sistema.pagina-error', compact('titulo', 'codigo', 'mensaje'));
            } else {
                return view('pedido.pedido-listar', compact('titulo'));
            }
        } else {
            return redirect('admin/login');
        }
      }
     
      
  public function cargarGrilla() {
      $request = $_REQUEST;

      $entidadPedido = new Pedido();
      $apedidos = $entidadPedido->obtenerFiltrado();

      $data = array();
      $cont=0;

      $inicio = $request['start'];
      $registros_por_pagina = $request['length'];

      for ($i=$inicio; $i < count($apedidos) && $cont < $registros_por_pagina; $i++) {
              $row = array();
              $row[] = '<a href="/admin/pedidos/' . $apedidos[$i]->idpedido . '">' . $apedidos[$i]->idcliente . '</a>';              
              $row[] = $apedidos[$i]->idsucursal;
              $row[] = $apedidos[$i]->idestado;
              $row[] = $apedidos[$i]->total;
              $row[] = $apedidos[$i]->comentario;
              $row[] = $apedidos[$i]->fecha;

              $cont++;
              $data[] = $row;
          }

      $json_data = array(
          "draw" => intval($request['draw']),
          "recordsTotal" => count($apedidos), //cantidad total de registros sin paginar
          "recordsFiltered" => count($apedidos),//cantidad total de registros en la paginacion
          "data" => $data
      );
      return json_encode($json_data);
  }
}