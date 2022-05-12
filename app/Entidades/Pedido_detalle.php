<?php

namespace App\Entidades;

use DB;
use Illuminate\Database\Eloquent\Model;

class Pedido_detalle extends Model
{
    protected $table = 'pedido_detalle';
    public $timestamps = false;

    protected $fillable = [
      'id_pedidodetalle',
      'fk_idpedido',
      'fk_idproducto',
      'cantidad',
      'precio_unitario',
      'subtotal'
      
    ];

    protected $hidden = [

    ];

    public function cargarDesdeRequest($request) {
      $this->id_pedidodetalle = $request->input('id') != "0" ? $request->input('id') : $this->id_pedidodetalle;
      $this->fk_idpedido = $request->input('lstIdpedido');
      $this->fk_idproducto = $request->input('lstIdproducto');
      $this->cantidad = $request->input('txtCantidad');
      $this->precio_unitario = $request->input('txtPrecio_unitario');
      $this->subtotal = $request->input('txtSubtotal');

    }

    public function obtenerTodos()
    {
        $sql = "SELECT
                  id_pedidodetalle,
                  fk_idpedido,
                  fk_idproducto,
                  cantidad,
                  precio_unitario,
                  subtotal
                FROM pedido_detalle ORDER BY id_pedidodetalle";
        $lstRetorno = DB::select($sql);
        return $lstRetorno;
    }

    public function obtenerPorId($id_pedidodetalle)
    {
            $sql = "SELECT
                   'id_pedidodetalle',
                   'fk_idpedido',
                   'fk_idproducto',
                   'cantidad',
                   'precio_unitario',
                   'subtotal'
                    FROM pedido_detalle WHERE id_pedidodetalle = $id_pedidodetalle";
            $lstRetorno = DB::select($sql);

      if (count($lstRetorno) > 0) {
            $this->id_pedidodetalle = $lstRetorno[0]->id_pedidodetalle;
            $this->fk_idpedido = $lstRetorno[0]->fk_idpedido;
            $this->fk_idproducto = $lstRetorno[0]->fk_idproducto;
            $this->cantidad = $lstRetorno[0]->cantidad;
            $this->precio_unitario = $lstRetorno[0]->precio_unitario;
            $this->subtotal = $lstRetorno[0]->subtotal;
      
            return $this;
      }
      return null;

    }
    public function guardar() { /* forma correcta que propone larabel para evitar inyecciones de querys maliciosas */
            $sql = "UPDATE pedido_detalle SET
                  fk_idpedido=?,
                  fk_idproducto=?,
                  cantidad=?,
                  precio_unitario=?
                  subtotal=?
                  WHERE id_pedidodetalle=?";
            $affected = DB::update($sql, 
            [
            $this->fk_idpedido,
            $this->fk_idproducto,
            $this->cantidad,
            $this->precio_unitario,
            $this->subtotal,
            $this->id_pedidodetalle]);
}
    
    public function eliminar()
    {
        $sql = "DELETE FROM pedido_detalle WHERE
            id_pedidodetalle=?";
        $affected = DB::delete($sql, [$this->id_pedidodetalle]);
    }

    public function insertar()
    {
      $sql = "INSERT INTO pedido_detalle (
            fk_idpedido,
            fk_idproducto,
            cantidad,
            precio_unitario,
            subtotal
        ) VALUES (?, ?, ?, ?, ?);";
      $result = DB::insert($sql, [
            $this->fk_idpedido,
            $this->fk_idproducto,
            $this->cantidad,
            $this->precio_unitario,
            $this->subtotal
      ]);
      return $this->id_pedidodetalle = DB::getPdo()->lastInsertId(); // accede al ultimo insertado
    }
    
}