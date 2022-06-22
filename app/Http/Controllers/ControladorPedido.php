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
      $titulo = "Pedidos";
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
              $row[] = '<a class="btn btn-secondary" href="/admin/pedidos/' . $apedidos[$i]->idpedido . '"> <i class="fa-solid fa-pencil"></i></a>';              
              $row[] = $apedidos[$i]->cliente;
              $row[] = $apedidos[$i]->sucursal;
              $row[] = $apedidos[$i]->estado;
              $row[] = $apedidos[$i]->total;
              $row[] = $apedidos[$i]->comentario;
              $row[] = date_format(date_create( $apedidos[$i]->fecha), "d/m/Y H:i");
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