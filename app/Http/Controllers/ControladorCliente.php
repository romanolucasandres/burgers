<?php

namespace App\Http\Controllers;

use App\Entidades\Cliente; //include_once "app/Entidades/Sistema/cliente.php";
use App\Entidades\Sistema\Patente;
use Illuminate\Http\Request;

require app_path() . '/start/constants.php';

class ControladorCliente extends Controller
{
      public function index(){
      $titulo = "Menú";
      if (cliente::autenticado() == true) {
            if (!Patente::autorizarOperacion("MENUCONSULTA")) {
                $codigo = "MENUCONSULTA";
                $mensaje = "No tiene permisos para la operaci&oacute;n.";
                return view('sistema.pagina-error', compact('titulo', 'codigo', 'mensaje'));
            } else {
                return view('cliente.cliente-listar', compact('titulo'));
            }
        } else {
            return redirect('admin/login');
        }
      }
      public function nuevo(){
            $titulo = "Nuevo cliente";
            return view("cliente.cliente-nuevo", compact('titulo'));
      }


      public function guardar(Request $request) {
            try {
            //Define la entidad servicio
            $titulo = "Modificar cliente";
            $entidad = new Cliente();
            $entidad->cargarDesdeRequest($request);

            //validaciones
            if ($entidad->nombre == "" || $entidad->apellido == "" || $entidad->correo == "") {
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
                  
                  $_POST["id"] = $entidad->idcliente; 
                  //lo lleva a
                  return view('cliente.cliente-listar', compact('titulo', 'msg'));
            }
            } catch (Exception $e) {
            $msg["ESTADO"] = MSG_ERROR;
            $msg["MSG"] = ERRORINSERT;
            }

            $id = $entidad->idcliente;
            $cliente = new Cliente();
            $cliente->obtenerPorId($id);

            

            return view('cliente.cliente-nuevo', compact('msg', 'cliente', 'titulo')) . '?id=' . $cliente->idcliente;

      }
  public function cargarGrilla() {
      $request = $_REQUEST;

      $entidadCliente = new Cliente();
      $clientes = $entidadCliente->obtenerFiltrado();

      $data = array();

      $inicio = $request['start'];
      $registros_por_pagina = $request['length'];

      if (count($clientes) > 0)
          $cont=0;
          for ($i=$inicio; $i < count($clientes) && $cont < $registros_por_pagina; $i++) {
              $row = array();
              $row[] = '<a href="/admin/clientes/' . $clientes[$i]->cliente . '">' . $clientes[$i]->cliente . '</a>';
              $row[] = $clientes[$i]->nombre;
              $row[] = $clientes[$i]->apellido;
              $row[] = $clientes[$i]->created_at != ""? date_format(date_create($clientes[$i]->created_at), 'Y-m-d H:i') : "";
              $row[] = $clientes[$i]->ultimo_ingreso != "" ?date_format(date_create($clientes[$i]->ultimo_ingreso), 'Y-m-d H:i') : "";
              $row[] = $clientes[$i]->activo == 1 ? "Si" : "No";
              $cont++;
              $data[] = $row;
          }

      $json_data = array(
          "draw" => intval($request['draw']),
          "recordsTotal" => count($clientes), //cantidad total de registros sin paginar
          "recordsFiltered" => count($clientes),//cantidad total de registros en la paginacion
          "data" => $data
      );
      return json_encode($json_data);
  }
}