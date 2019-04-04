<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class testimonioModel extends Model
{
    protected $table = 'tbl_testimonio';
    protected $idTestimonio;
    protected $titulo;
    protected $descripcion;
    protected $mostrarTestimonio;
    protected $created_at;
    protected $updated_at;

    public function __constructor()
    {

    }
/*
    public function __constructor($data)
    {
        $this->titulo = $data->titulo;
        $this->descripcion = $data->descripcion;
    }*/

    public function getIdTestimonio()
    {
         $this->idTestimonio;
    }
    public function getTitulo()
    {
         $this->titulo;
    }
    public function getDescripcion()
    {
         $this->descripcion;
    }
    public function getMostrarTestimonio()
    {
         $this->mostrarTestimonio;
    }
    public function getCreated_at()
    {
         $this->created_at;
    }
    public function getUpdated_at()
    {
         $this->updated_at;
    }
    public function setIdTestimonio($idTestimonioN)
    {
        $this->idTestimonio = $idTestimonioN;
    }
    public function setTitulo($tituloN)
    {
        $this->titulo = $tituloN;
    }
    public function setDescripcion($descripcionN)
    {
        $this->descripcion = $descripcionN;
    }
    public function setMostrarTestimonio($mostrarTestimonioN)
    {
        $this->mostrarTestimonio = $mostrarTestimonioN;
    }
    public function setCreated_at($created_atN)
    {
        $this->created_at = $created_atN;
    }
    public function setUpdated_at($updated_atN)
    {
        $this->updated_at = $updated_atN;
    }
}
