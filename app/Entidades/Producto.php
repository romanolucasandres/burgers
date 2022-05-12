<?php

namespace App\Entidades;

use DB;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';
    public $timestamps = false;

    protected $fillable = [
      'idproducto',
      'nombre',
      'descripcion',
      'imagen',
      'precio',
      'clave',
      
    ];

    protected $hidden = [

    ];

    public function cargarDesdeRequest($request) {
      $this->idproducto = $request->input('id') != "0" ? $request->input('id') : $this->idproducto;
      $this->nombre = $request->input('txtNombre');
      $this->descripcion = $request->input('txtDescripcion');
      $this->imagen = $request->input('txtImagen');
      $this->precio = $request->input('txtPrecio');

    }

    public function obtenerTodos()
    {
        $sql = "SELECT
                  idproducto,
                  nombre,
                  descripcion,
                  imagen,
                  precio
                FROM productos ORDER BY nombre";
        $lstRetorno = DB::select($sql);
        return $lstRetorno;
    }

    public function obtenerPorId($idproducto)
    {
            $sql = "SELECT
                   'idproducto',
                   'nombre',
                   'descripcion',
                   'imagen',
                   'precio'
                    FROM productos WHERE idproducto = $idproducto";
            $lstRetorno = DB::select($sql);

      if (count($lstRetorno) > 0) {
            $this->idproducto = $lstRetorno[0]->idproducto;
            $this->nombre = $lstRetorno[0]->nombre;
            $this->descripcion = $lstRetorno[0]->descripcion;
            $this->imagen = $lstRetorno[0]->imagen;
            $this->precio = $lstRetorno[0]->precio;
          
      
            return $this;
      }
      return null;

    }
    public function guardar() { /* forma correcta que propone larabel para evitar inyecciones de querys maliciosas */
            $sql = "UPDATE productos SET
                  nombre=?,
                  descripcion=?,
                  imagen=?,
                  precio=?
                  WHERE idproducto=?";
            $affected = DB::update($sql, 
            [
            $this->nombre,
            $this->descripcion,
            $this->imagen,
            $this->precio,
            $this->idproducto]);
}
    
    public function eliminar()
    {
        $sql = "DELETE FROM productos WHERE
            idproducto=?";
        $affected = DB::delete($sql, [$this->idproducto]);
    }

    public function insertar()
    {
      $sql = "INSERT INTO productos (
            nombre,
            descripcion,
            imagen,
            precio
        ) VALUES (?, ?, ?, ?);";
      $result = DB::insert($sql, [
            $this->nombre,
            $this->descripcion,
            $this->imagen,
            $this->precio,
      ]);
      return $this->idproducto = DB::getPdo()->lastInsertId(); // accede al ultimo insertado
    }
    
}