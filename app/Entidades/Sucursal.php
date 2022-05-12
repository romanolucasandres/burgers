<?php

namespace App\Entidades;

use DB;
use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    protected $table = 'sucursales';
    public $timestamps = false;

    protected $fillable = [
      'idsucursal',
      'nombre',
      'domicilio',
      'telefono',
      'link_mapa'
      
    ];

    protected $hidden = [

    ];

    public function cargarDesdeRequest($request) {
      $this->idsucursal = $request->input('id') != "0" ? $request->input('id') : $this->idsucursal;
      $this->nombre = $request->input('txtNombre');
      $this->domicilio = $request->input('txtDomicilio');
      $this->telefono = $request->input('txtTelefono');
      $this->link_mapa = $request->input('txtLink_mapa');

    }

    public function obtenerTodos()
    {
        $sql = "SELECT
                  idsucursal,
                  nombre,
                  domicilio,
                  telefono,
                  link_mapa
                FROM sucursales ORDER BY nombre";
        $lstRetorno = DB::select($sql);
        return $lstRetorno;
    }

    public function obtenerPorId($idsucursal)
    {
            $sql = "SELECT
                   'idsucursal',
                   'nombre',
                   'domicilio',
                   'telefono',
                   'link_mapa'
                    FROM sucursales WHERE idsucursal = $idsucursal";
            $lstRetorno = DB::select($sql);

      if (count($lstRetorno) > 0) {
            $this->idsucursal = $lstRetorno[0]->idsucursal;
            $this->nombre = $lstRetorno[0]->nombre;
            $this->domicilio = $lstRetorno[0]->domicilio;
            $this->telefono = $lstRetorno[0]->telefono;
            $this->link_mapa = $lstRetorno[0]->link_mapa;
          
      
            return $this;
      }
      return null;

    }
    public function guardar() { /* forma correcta que propone larabel para evitar inyecciones de querys maliciosas */
            $sql = "UPDATE sucursales SET
                  nombre=?,
                  domicilio=?,
                  telefono=?,
                  link_mapa=?
                  WHERE idsucursal=?";
            $affected = DB::update($sql, 
            [
            $this->nombre,
            $this->domicilio,
            $this->telefono,
            $this->link_mapa,
            $this->idsucursal]);
}
    
    public function eliminar()
    {
        $sql = "DELETE FROM sucursales WHERE
            idsucursal=?";
        $affected = DB::delete($sql, [$this->idsucursal]);
    }

    public function insertar()
    {
      $sql = "INSERT INTO sucursales (
            nombre,
            domicilio,
            telefono,
            link_mapa
        ) VALUES (?, ?, ?, ?);";
      $result = DB::insert($sql, [
            $this->nombre,
            $this->domicilio,
            $this->telefono,
            $this->link_mapa,
      ]);
      return $this->idsucursal = DB::getPdo()->lastInsertId(); // accede al ultimo insertado
    }
    
}