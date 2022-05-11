<?php

namespace App\Entidades;

use DB;
use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    protected $table = 'carrito';
    public $timestamps = false;

    protected $fillable = [
      'idcarrito',
      'fk_idcliente',
      'fk_idproducto',
      'cantidad'
    ];

    protected $hidden = [

    ];

    public function cargarDesdeRequest($request) {
      $this->idcarrito = $request->input('id') != "0" ? $request->input('id') : $this->idcarrito;
      $this->fk_idcliente = $request->input('lstCliente');
      $this->fk_idproducto = $request->input('lstProducto');
      $this->cantidad = $request->input('txtCantidad');
      

    }

    public function obtenerTodos()
    {
        $sql = "SELECT
                  idcarrito,
                  fk_idcliente,
                  fk_idproducto,
                  cantidad
                FROM carrito ORDER BY idcarrito";
        $lstRetorno = DB::select($sql);
        return $lstRetorno;
    }

    public function obtenerPorId($idcarrito)
    {
            $sql = "SELECT
                  'idcarrito',
                  'fk_idcliente',
                  'fk_idproducto',
                  'cantidad'
                    FROM carrito WHERE idcarrito = $idcarrito";
            $lstRetorno = DB::select($sql);

      if (count($lstRetorno) > 0) {
            $this->idcarrito = $lstRetorno[0]->idcliente;
            $this->fk_idcliente = $lstRetorno[0]->fk_idcliente;
            $this->fk_idproducto = $lstRetorno[0]->fk_idproducto;
            $this->cantidad = $lstRetorno[0]->cantidad;
      
            return $this;
      }
      return null;

    }
    public function guardar() { /* forma correcta que propone larabel para evitar inyecciones de querys maliciosas */
            $sql = "UPDATE carrito SET
                  fk_idcliente=?,
                  fk_idproducto=?,
                  cantidad=?
                  WHERE idcarrito=?";
            $affected = DB::update($sql, 
            [
                  $this->idcarrito,
                  $this->fk_idcliente,
                  $this->fk_idproducto,
                  $this->cantidad]);
}
    
    public function eliminar()
    {
        $sql = "DELETE FROM carrito WHERE
            idcarrito=?";
        $affected = DB::delete($sql, [$this->idcarrito]);
    }

    public function insertar()
    {
      $sql = "INSERT INTO carrito (
            fk_idcliente,
            fk_idproducto,
            cantidad
        ) VALUES (?, ?, ?);";
      $result = DB::insert($sql, [
            $this->fk_idcliente,
            $this->fk_idproducto,
            $this->cantidad
      ]);
      return $this->idcarrito = DB::getPdo()->lastInsertId(); // accede al ultimo insertado
    }
    
}