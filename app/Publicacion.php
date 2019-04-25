<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model
{
    protected $table = 'tbl_publicacion';
    protected $idPublicacion;
    protected $titulo;
    protected $pathImgVideo;
    protected $fecha;
    protected $hora;
    protected $descripcion;
    protected $created_at;
    protected $updated_at;
    protected $idUbicacion;
    protected $idPublicacionEstado;
    protected $idCiudad;
    protected $idUsuario;

    public function __constructor()
    {

    }
    public function getIdPublicacion(){ return $this->idPublicacion;}
    public function getTitulo(){return $this->titulo;}
    public function getPathImgVideo(){return $this->pathImgVideo;}
    public function getFecha(){return $this->fecha;}
    public function getHora(){return $this->hora;}
    public function getDescripcion(){return $this->descripcion;}
    public function getCreated_at(){return $this->created_at;}
    public function getUpdated_at(){return $this->update_at;}
    public function getIdUbicacion(){return $this->idUbicacion;}
    public function getIdPublicacionEstado(){return $this->idPublicacionEstado;}
    public function getIdCiudad(){return $this->idCiudad;}
    public function getIdUsuario(){return $this->idUsuario;}
    
    public function setIdPublicacion($idPublicacionN){$this->idPublicacion = $idPublicacionN;}
    public function setTitulo($tituloN){$this->titulo = $tituloN;}
    public function setPathImgVideo($pathImgVideoN){$this->pathImgVideo = $tituloN;}
    public function setFecha($fechaN){$this->fecha = $fechaN;}
    public function setHora($horaN){$this->hora = $horaN;}
    public function setDescripcion($descripcionN){$this->descripcion = $descripcionN;}
    public function setCreated_at($created_atN){$this->created_at = $created_atN;}
    public function setUpdated_at($updated_atN){$this->updated_at = $updated_atN;}
    public function setIdUbicacion($idUbicacionN){$this->idUbicacion = $idUbicacionN;}
    public function setIdPublicacionEstado($idPublicacionEstadoN){$this->idPublicacionEstado = $idPublicacionEstadoN;}
    public function setIdCiudad($idCiudadN){$this->idCiudad = $idCiudadN;}
    public function setIdUsuario($idUsuarioN){$this->idUsuario = $idUsuarioN;}
}
