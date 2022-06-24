<?php

namespace App\Entidades;

use DB;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table = 'pedidos';
    public $timestamps = false;

    protected $fillable = [
      'idpedido',
      'fk_idcliente',
      'fk_idsucursal',
      'fk_estado',
      'total',
      'comentario',
      'fecha'
      
    ];

    protected $hidden = [

    ];

    public function cargarDesdeRequest($request) {
      $this->idpedido = $request->input('id') != "0" ? $request->input('id') : $this->idpedido;
      $this->fk_idcliente = $request->input('lstIdcliente');
      $this->fk_idsucursal = $request->input('lstIdsucursal');
      $this->fk_estado = $request->input('lstEstado');
      $this->total = $request->input('txtTotal');
      $this->comentario = $request->input('txtComentario');
      $this->fecha = $request->input('txtFecha');

    }
    public function obtenerFiltrado()
    {
        $request = $_REQUEST;
        $columns = array(
            0 => 'A.idpedido',
            1 => 'B.apellido',
            2 => 'C.nombre',
            3 => 'D.nombre',
            4 => 'A.total',
            5 => 'A.comentario',
            6 => 'A.fecha',
        );
        $sql = "SELECT DISTINCT
                    A.idpedido,
                    B.apellido as cliente,
                    C.nombre as sucursal,
                    D.nombre as estado,
                    A.total,
                    A.comentario,
                    A.fecha
                    FROM pedidos A
                    INNER JOIN clientes B ON A.fk_idcliente = B.idcliente
                    INNER JOIN sucursales C ON A.fk_idsucursal = C.idsucursal
                    INNER JOIN estado D ON A.fk_estado = D.idestado
                WHERE 1=1
                ";

        //Realiza el filtrado
        if (!empty($request['search']['value'])) {
            $sql .= " AND ( B.apellido LIKE '%" . $request['search']['value'] . "%' ";
            $sql .= " OR C.nombre LIKE '%" . $request['search']['value'] . "%' ";
            $sql .= " OR D.nombre LIKE '%" . $request['search']['value'] . "%' )";
        }
        $sql .= " ORDER BY " . $columns[$request['order'][0]['column']] . "   " . $request['order'][0]['dir'];

        $lstRetorno = DB::select($sql);

        return $lstRetorno;
    }

  

    public function obtenerTodos()
    {
        $sql = "SELECT
                  idpedido,
                  fk_idcliente,
                  fk_idsucursal,
                  fk_estado,
                  total,
                  comentario,
                  fecha
                FROM pedidos ORDER BY idpedido";
        $lstRetorno = DB::select($sql);
        return $lstRetorno;
    }

    public function obtenerPorId($idpedido)
    {
            $sql = "SELECT
                   'idpedido',
                   'fk_idcliente',
                   'fk_idsucursal',
                   'fk_estado',
                   'total',
                   'comentario',
                   'fecha'
                    FROM pedidos WHERE idpedido = $idpedido";
            $lstRetorno = DB::select($sql);

      if (count($lstRetorno) > 0) {
            $this->idpedido = $lstRetorno[0]->idpedido;
            $this->fk_idcliente = $lstRetorno[0]->fk_idcliente;
            $this->fk_idsucursal = $lstRetorno[0]->fk_idsucursal;
            $this->fk_estado = $lstRetorno[0]->fk_estado;
            $this->total = $lstRetorno[0]->total;
            $this->comentario = $lstRetorno[0]->comentario;
            $this->fecha = $lstRetorno[0]->fecha;
      
            return $this;
      }
      return null;

    }
    public function guardar() { /* forma correcta que propone larabel para evitar inyecciones de querys maliciosas */
            $sql = "UPDATE pedidos SET
                  fk_idcliente=?,
                  fk_idsucursal=?,
                  fk_estado=?,
                  total=?,
                  comentario=?
                  fecha=?
                  WHERE idpedido=?";
            $affected = DB::update($sql, 
            [
            $this->fk_idcliente,
            $this->fk_idsucursal,
            $this->fk_estado,
            $this->total,
            $this->comentario,
            $this->fecha,
            $this->idpedido]);
}
    
    public function eliminar()
    {
        $sql = "DELETE FROM pedidos WHERE
            idpedido=?";
        $affected = DB::delete($sql, [$this->idpedido]);
    }

    public function insertar()
    {
      $sql = "INSERT INTO pedidos (
            fk_idcliente,
            fk_idsucursal,
            fk_estado,
            total,
            comentario,
            fecha
        ) VALUES (?, ?, ?, ?, ?, ?);";
      $result = DB::insert($sql, [
            $this->fk_idcliente,
            $this->fk_idsucursal,
            $this->fk_estado,
            $this->total,
            $this->comentario,
            $this->fecha
      ]);
      return $this->idpedido = DB::getPdo()->lastInsertId(); // accede al ultimo insertado
    }
    
}