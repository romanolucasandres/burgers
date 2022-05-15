<?php

namespace App\Http\Controllers;

use App\Entidades\Cliente; //include_once "app/Entidades/Sistema/cliente.php";
use App\Entidades\Sistema\Patente;
use App\Entidades\Sistema\Usuario;
use Illuminate\Http\Request;

require app_path() . '/start/constants.php';

class ControladorCliente extends Controller
{
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
          if ($entidad->nombre == "") {
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

      $entidadUsuario = new Usuario();
      $usuarios = $entidadUsuario->obtenerFiltrado();

      $data = array();

      $inicio = $request['start'];
      $registros_por_pagina = $request['length'];

      if (count($usuarios) > 0)
          $cont=0;
          for ($i=$inicio; $i < count($usuarios) && $cont < $registros_por_pagina; $i++) {
              $row = array();
              $row[] = '<a href="/admin/usuarios/' . $usuarios[$i]->usuario . '">' . $usuarios[$i]->usuario . '</a>';
              $row[] = $usuarios[$i]->nombre;
              $row[] = $usuarios[$i]->apellido;
              $row[] = $usuarios[$i]->created_at != ""? date_format(date_create($usuarios[$i]->created_at), 'Y-m-d H:i') : "";
              $row[] = $usuarios[$i]->ultimo_ingreso != "" ?date_format(date_create($usuarios[$i]->ultimo_ingreso), 'Y-m-d H:i') : "";
              $row[] = $usuarios[$i]->activo == 1 ? "Si" : "No";
              $cont++;
              $data[] = $row;
          }

      $json_data = array(
          "draw" => intval($request['draw']),
          "recordsTotal" => count($usuarios), //cantidad total de registros sin paginar
          "recordsFiltered" => count($usuarios),//cantidad total de registros en la paginacion
          "data" => $data
      );
      return json_encode($json_data);
  }
}