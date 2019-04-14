<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    protected $table = 'tbl_ciudad';

    public $idCiudad;
    public $titulo;
    public $created_at;
    public $updated_at;
    public $idEstado;
    public $areaMetropolitana;

    public function getIdCiudad()
    {
        return $this->idCiudad;
    }
    public function setIdCiudad($idCiudadN)
    {
        $this->idCiudad = $idCiudadN;
    }
    public function getTitulo()
    {
        return $this->titulo;
    }
    public function setTitulo($tituloN)
    {
        $this->titulo = $tituloN;
    }
    public function getCreated_at()
    {
        return $this->created_at;
    }
    public function setCreated_at($created_atN)
    {
        $this->created_at = $created_atN;
    }
    public function getUpdated_at()
    {
        return $this->updated_at;
    }
    public function setUpdated_at($updated_atN)
    {
        $this->updated_at = $updated_atN;
    }
    public function getIdEstado()
    {
        return $this->idEstado;
    }
    public function setIdEstado($idEstadoN)
    {
        $this->idEstado = $idEstadoN;
    }
    public function getAreaMetropolitana()
    {
        return $this->areaMetropolitana;
    }
    public function setAreaMetropolitana($areaMetropolitanaN)
    {
        $this->areaMetropolitana = $areaMetropolitanaN;
    }
    
    
    
}
