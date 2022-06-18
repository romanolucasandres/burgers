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
      $this->idcliente = $request->input('id') != "0" ? $request->input('id') : $this->idcliente;
      $this->nombre = $request->input('txtNombre');
      $this->apellido = $request->input('txtApellido');
      $this->telefono = $request->input('txtTelefono');
      $this->correo = $request->input('txtCorreo');
      $this->clave = $request->input('txtClave');

    }

    public function obtenerTodos()
    {
        $sql = "SELECT
                  idcliente,
                  nombre,
                  apellido,
                  telefono,
                  correo,
                  clave
                FROM clientes ORDER BY nombre";
        $lstRetorno = DB::select($sql);
        return $lstRetorno;
    }

    public function obtenerPorId($idcliente)
    {
            $sql = "SELECT
                   'idcliente',
                   'nombre',
                   'apellido',
                   'telefono',
                   'correo',
                   'clave',
                    FROM clientes WHERE idcliente = $idcliente";
            $lstRetorno = DB::select($sql);

      if (count($lstRetorno) > 0) {
            $this->idcliente = $lstRetorno[0]->idcliente;
            $this->nombre = $lstRetorno[0]->nombre;
            $this->apellido = $lstRetorno[0]->apellido;
            $this->telefono = $lstRetorno[0]->telefono;
            $this->correo = $lstRetorno[0]->correo;
            $this->clave = $lstRetorno[0]->clave;
      
            return $this;
      }
      return null;

    }
    public function guardar() { /* forma correcta que propone larabel para evitar inyecciones de querys maliciosas */
            $sql = "UPDATE clientes SET
                  nombre=?,
                  apellido=?,
                  telefono=?,
                  correo=?,
                  clave=?
                  WHERE idcliente=?";
            $affected = DB::update($sql, 
            [
            $this->nombre,
            $this->apellido,
            $this->telefono,
            $this->correo,
            password_hash($this->clave,PASSWORD_DEFAULT),
            $this->idcliente]);
}
    
    public function eliminar()
    {
        $sql = "DELETE FROM clientes WHERE
            idcliente=?";
        $affected = DB::delete($sql, [$this->idcliente]);
    }

    public function insertar()
    {
      $sql = "INSERT INTO clientes (
            nombre,
            apellido,
            telefono,
            correo,
            clave
        ) VALUES (?, ?, ?, ?, ?);";
      $result = DB::insert($sql, [
            $this->nombre,
            $this->apellido,
            $this->telefono,
            $this->correo,
            password_hash($this->clave,PASSWORD_DEFAULT)
      ]);
      return $this->idcliente = DB::getPdo()->lastInsertId(); // accede al ultimo insertado
    }

    public function obtenerFiltrado()
    {
        $request = $_REQUEST;
        $columns = array(
            0 => 'A.nombre',
            1 => 'A.apellido',
            2 => 'A.telefono',
            3 => 'A.correo',
        );
        $sql = "SELECT DISTINCT
                    A.idcliente,
                    A.nombre,
                    a.apellido,
                    A.telefono,
                    A.correo
                    FROM clientes A
                WHERE 1=1
                ";

        //Realiza el filtrado
        if (!empty($request['search']['value'])) {
            $sql .= " AND ( A.nombre LIKE '%" . $request['search']['value'] . "%' ";
            $sql .= " OR A.apellido LIKE '%" . $request['search']['value'] . "%' ";
            $sql .= " OR A.telefono LIKE '%" . $request['search']['value'] . "%' ";
            $sql .= " OR A.correo LIKE '%" . $request['search']['value'] . "%' )";
        }
        $sql .= " ORDER BY " . $columns[$request['order'][0]['column']] . "   " . $request['order'][0]['dir'];

        $lstRetorno = DB::select($sql);

        return $lstRetorno;
    }
    
}