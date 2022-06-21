<?php

namespace App\Http\Controllers;

use App\Entidades\Cliente; //include_once "app/Entidades/Sistema/cliente.php";
use App\Entidades\Sistema\Patente;
use App\Entidades\Sistema\Usuario;
use Illuminate\Http\Request;

require app_path() . '/start/constants.php';

class ControladorCliente extends Controller
{
      public function index(){
      $titulo = "Cliente";
      if (Usuario::autenticado() == true) {
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
      $aclientes = $entidadCliente->obtenerFiltrado();

      $data = array();

      $inicio = $request['start'];
      $registros_por_pagina = $request['length'];

      if (count($aclientes) > 0)
          $cont=0;
          for ($i=$inicio; $i < count($aclientes) && $cont < $registros_por_pagina; $i++) {
              $row = array();
              $row[] = '<a class="btn btn-secondary" href="/admin/clientes/' . $aclientes[$i]->idcliente . '"> <i class="fa-solid fa-pencil"></i></a>';              
              $row[] = $aclientes[$i]->nombre;
              $row[] = $aclientes[$i]->apellido;
              $row[] = $aclientes[$i]->telefono;
              $row[] = $aclientes[$i]->correo;
           

              $cont++;
              $data[] = $row;
          }

      $json_data = array(
          "draw" => intval($request['draw']),
          "recordsTotal" => count($aclientes), //cantidad total de registros sin paginar
          "recordsFiltered" => count($aclientes),//cantidad total de registros en la paginacion
          "data" => $data
      );
      return json_encode($json_data);
  }
  public function editar($id)
    {
        $titulo = "Modificar Cliente";
        if (Usuario::autenticado() == true) {
            if (!Patente::autorizarOperacion("MENUMODIFICACION")) {
                $codigo = "MENUMODIFICACION";
                $mensaje = "No tiene pemisos para la operaci&oacute;n.";
                return view('sistema.pagina-error', compact('titulo', 'codigo', 'mensaje'));
            } else {
                $cliente = new Cliente();
                $cliente->obtenerPorId($id);

                return view('cliente.cliente-nuevo', compact('cliente', 'titulo'));
            }
        } else {
            return redirect('admin/login');
        }
    }
}