<?php

namespace App\Http\Controllers;

use App\Entidades\Sucursal;
//include_once "app/Entidades/Sistema/Menu.php";
use App\Entidades\Sistema\Patente;
use App\Entidades\Sistema\Usuario;
use Illuminate\Http\Request;

require app_path() . '/start/constants.php';

class ControladorSucursal extends Controller
{
      public function index(){
            $titulo = "Listado de sucursales";
            if (Usuario::autenticado() == true) {
                  if (!Patente::autorizarOperacion("MENUCONSULTA")) {
                      $codigo = "MENUCONSULTA";
                      $mensaje = "No tiene permisos para la operaci&oacute;n.";
                      return view('sistema.pagina-error', compact('titulo', 'codigo', 'mensaje'));
                  } else {
                      return view('sucursal.sucursal-listar', compact('titulo'));
                  }
              } else {
                  return redirect('admin/login');
              }
            }
            public function nuevo(){
                  $titulo = "Nueva sucursal";
                  return view("sucursal.sucursal-nuevo", compact('titulo'));
            }
            
       
      public function guardar(Request $request) {
            try {
            //Define la entidad servicio
            $titulo = "Modificar sucursal";
            $entidad = new Sucursal();
            $entidad->cargarDesdeRequest($request);

            //validaciones
            if ($entidad->nombre == "" || $entidad->domicilio == "") {
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
                  
                  $_POST["id"] = $entidad->idsucursal; 
                  //lo lleva a
                  return view('sucursal.sucursal-listar', compact('titulo', 'msg'));
            }
            } catch (Exception $e) {
            $msg["ESTADO"] = MSG_ERROR;
            $msg["MSG"] = ERRORINSERT;
            }

            $id = $entidad->idsucursal;
            $sucursal = new Sucursal();
            $sucursal->obtenerPorId($id);

         

            return view('sucursal.sucursal-nuevo', compact('msg', 'sucursal', 'titulo')) . '?id=' . $sucursal->idsucursal;

            }
      public function cargarGrilla() {
      $request = $_REQUEST;

      $entidadSucursal = new Sucursal();
      $aSucursal = $entidadSucursal->obtenerFiltrado();

      $data = array();

      $inicio = $request['start'];
      $registros_por_pagina = $request['length'];

      if (count($aSucursal) > 0)
      $cont=0;
      for ($i=$inicio; $i < count($aSucursal) && $cont < $registros_por_pagina; $i++) {
            $row = array();
            $row[] = '<a href="/admin/sucursal/' . $aSucursal[$i]->idsucursal . '">' . $aSucursal[$i]->nombre . '</a>';
            $row[] = $aSucursal[$i]->domicilio;
            $row[] = $aSucursal[$i]->telefono;
            $row[] = $aSucursal[$i]->link_mapa;
            $cont++;
            $data[] = $row;
      }

      $json_data = array(
      "draw" => intval($request['draw']),
      "recordsTotal" => count($aSucursal), //cantidad total de registros sin paginar
      "recordsFiltered" => count($aSucursal),//cantidad total de registros en la paginacion
      "data" => $data
      );
      return json_encode($json_data);
      }
}


