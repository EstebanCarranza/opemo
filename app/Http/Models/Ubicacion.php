<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Ubicacion extends Model
{
    protected $table = 'tbl_ubicacion';
    protected $idUbicacion;
    protected $titulo;
    protected $descripcion;
    protected $created_at ;
    protected $updated_at ;
    protected $idCiudad ;
    protected $idUsuario;
    protected $pathUbicacion;

    public function getTableName(){return $this->table;}

    public function getIdUbicacion(){return $this->idUbicacion;}
    public function getTitulo(){return $this->titulo;}
    public function getDescripcion(){return $this->descripcion;}
    public function getCreated_at(){return $this->created_at;}
    public function getUpdated_at(){return $this->updated_at;}
    public function getIdCiudad (){return $this->idCiudad;}
    public function getIdUsuario(){return $this->idUsuario;}
    public function getPathUbicacion(){return $this->pathUbicacion;}

    public function setIdUbicacion($idUbicacionN){$this->idUbicacion = $idUbicacionN;}
    public function setTitulo($tituloN){$this->titulo = $tituloN;}
    public function setDescripcion($descripcionN){$this->descripcion = $descripcionN;}
    public function setCreated_at($created_atN){$this->created_at = $created_atN;}
    public function setUpdated_at($updated_atN){$this->updated_at = $updated_atN;}
    public function setIdCiudad ($idCiudadN){$this->idCiudad = $idCiudadN;}
    public function setIdUsuario($idUsuarioN){$this->idUsuario = $idUsuarioN;}
    public function setPathUbicacion($pathUbicacionN){$this->pathUbicacion = $pathUbicacionN;}

}
