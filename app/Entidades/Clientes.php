<?php

namespace App\Entidades;

use DB;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';
    public $timestamps = false;

    protected $fillable = [
      'idcliente',
      'nombre',
      'apellido',
      'telefono',
      'correo',
      'clave',
      
    ];

    protected $hidden = [

    ];

    public function cargarDesdeRequest($request) {

    }

    public function obtenerTodos()
    {
        $sql = "SELECT
                  A.idmenu,
                  A.nombre
                FROM sistema_menues A ORDER BY A.nombre";
        $lstRetorno = DB::select($sql);
        return $lstRetorno;
    }

    public function obtenerPorId($idmenu)
    {

    }
    public function guardar() { /* forma correcta que propone larabel para evitar inyecciones de querys maliciosas */
    }
    
    public function eliminar()
    {
        $sql = "DELETE FROM sistema_menues WHERE
            idmenu=?";
        $affected = DB::delete($sql, [$this->idmenu]);
    }

    public function insertar()
    {
    }
    
}