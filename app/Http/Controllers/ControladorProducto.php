<?php

namespace App\Http\Controllers;

use App\Entidades\Producto as EntidadesProducto;
//include_once "app/Entidades/Sistema/Menu.php";
use App\Entidades\Sistema\Patente;
use App\Entidades\Sistema\Usuario;
use Illuminate\Http\Request;

require app_path() . '/start/constants.php';

class ControladorProducto extends Controller
{
      public function index(){
            $titulo = "Listado de Productos";
            if (Usuario::autenticado() == true) {
                  if (!Patente::autorizarOperacion("MENUCONSULTA")) {
                      $codigo = "MENUCONSULTA";
                      $mensaje = "No tiene permisos para la operaci&oacute;n.";
                      return view('sistema.pagina-error', compact('titulo', 'codigo', 'mensaje'));
                  } else {
                      return view('producto.producto-listar', compact('titulo'));
                  }
              } else {
                  return redirect('admin/login');
              }
            }
            public function nuevo(){
                  $titulo = "Nuevo producto";
                  return view("producto.producto-nuevo", compact('titulo'));
            }

       
      public function guardar(Request $request) {
            try {
            //Define la entidad servicio
            $titulo = "Modificar producto";
            $entidad = new EntidadesProducto();
            $entidad->cargarDesdeRequest($request);

            //validaciones
            if ($entidad->nombre == "" || $entidad->precio == "") {
                  $msg["ESTADO"] = MSG_ERROR;
                  $msg["MSG"] = "Complete todos los datos";
            } else {
                  if ($_POST["id"] > 0) {
                        //Es actualizacion
                        $entidad->guardar();

                        $msg["ESTADO"] = MSG_SUCCESS;
                        $msg["MSG"] = OKINSERT;
                  } else {
                        //Es nuevo
                        $entidad->insertar();

                        $msg["ESTADO"] = MSG_SUCCESS;
                        $msg["MSG"] = OKINSERT;
                  }
                  
                  $_POST["id"] = $entidad->idproducto; 
                  //lo lleva a
                  return view('producto.producto-listar', compact('titulo', 'msg'));
            }
            } catch (Exception $e) {
            $msg["ESTADO"] = MSG_ERROR;
            $msg["MSG"] = ERRORINSERT;
            }

            $id = $entidad->idproducto;
            $producto = new EntidadesProducto();
            $producto->obtenerPorId($id);

            

            return view('producto.producto-nuevo', compact('msg', 'producto', 'titulo')) . '?id=' . $producto->idproducto;

            }
      public function cargarGrilla() {
      $request = $_REQUEST;

      $entidadProducto = new EntidadesProducto();
      $aProductos = $entidadProducto->obtenerFiltrado();

      $data = array();

      $inicio = $request['start'];
      $registros_por_pagina = $request['length'];

      if (count($aProductos) > 0)
      $cont=0;
      for ($i=$inicio; $i < count($aProductos) && $cont < $registros_por_pagina; $i++) {
            $row = array();
            $row[] = '<a href="/admin/productos/' . $aProductos[$i]->idproducto . '">' . $aProductos[$i]->nombre . '</a>';
            $row[] = $aProductos[$i]->descripcion;
            $row[] = $aProductos[$i]->imagen;
            $row[] = $aProductos[$i]->precio;
            $cont++;
            $data[] = $row;
      }

      $json_data = array(
      "draw" => intval($request['draw']),
      "recordsTotal" => count($aProductos), //cantidad total de registros sin paginar
      "recordsFiltered" => count($aProductos),//cantidad total de registros en la paginacion
      "data" => $data
      );
      return json_encode($json_data);
      }
}


