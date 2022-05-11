<?php

namespace App\Entidades;

use DB;
use Illuminate\Database\Eloquent\Model;

class estado extends Model
{
    protected $table = 'estado';
    public $timestamps = false;

    protected $fillable = [
      'idestado',
      'nombre'
    ];

    protected $hidden = [

    ];

    public function cargarDesdeRequest($request) {
      $this->idestado = $request->input('id') != "0" ? $request->input('id') : $this->idestado;
      $this->nombre = $request->input('txtNombre');
      

    }

    public function obtenerTodos()
    {
        $sql = "SELECT
                  idestado,
                  nombre
                FROM estado ORDER BY idestado";
        $lstRetorno = DB::select($sql);
        return $lstRetorno;
    }

    public function obtenerPorId($idestado)
    {
            $sql = "SELECT
                  'idestado',
                  'nombre'
                    FROM estado WHERE idestado = $idestado";
            $lstRetorno = DB::select($sql);

      if (count($lstRetorno) > 0) {
            $this->idestado = $lstRetorno[0]->idestado;
            $this->nombre = $lstRetorno[0]->nombre;
      
            return $this;
      }
      return null;

    }
    public function guardar() { /* forma correcta que propone larabel para evitar inyecciones de querys maliciosas */
            $sql = "UPDATE estado SET
                  nombre=?,
                  WHERE idestado=?";
            $affected = DB::update($sql, 
            [
                  $this->idestado,
                  $this->nombre]);
}
    
    public function eliminar()
    {
        $sql = "DELETE FROM estado WHERE
            idestado=?";
        $affected = DB::delete($sql, [$this->idestado]);
    }

    public function insertar()
    {
      $sql = "INSERT INTO estado (
            nombre
        ) VALUES (?);";
      $result = DB::insert($sql, [
            $this->nombre
      ]);
      return $this->idestado = DB::getPdo()->lastInsertId(); // accede al ultimo insertado
    }
    
}