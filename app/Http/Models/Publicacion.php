<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\imageHelperController;

class Publicacion extends Model
{
    protected $table = 'tbl_publicacion';
    protected $view = 'vListaPublicacion';
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

    protected $vNombreUsuario;
    protected $vTituloUbicacion;
    protected $vTituloPublicacionEstado;
    protected $vTituloCiudad; 
    protected $vTituloCiudadCompleta;

    public function getTableName(){return $this->table;}

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
    
    //get data for view vListaPublicacion
    public function getTituloUbicacion(){return $this->vTituloUbicacion;}
    public function getTituloPublicacionEstado(){return $this->vTituloPublicacionEstado;}
    public function getTituloCiudad(){return $this->vTituloCiudad;}
    public function getTituloCiudadCompleta(){return $this->vTituloCiudadCompleta;}
    public function getNombreUsuario(){return $this->vNombreUsuario;}
    
    public function setIdPublicacion($idPublicacionN){$this->idPublicacion = $idPublicacionN;}
    public function setTitulo($tituloN){$this->titulo = $tituloN;}
    public function setPathImgVideo($pathImgVideoN){$this->pathImgVideo = $pathImgVideoN;}
    public function setFecha($fechaN){$this->fecha = $fechaN;}
    public function setHora($horaN){$this->hora = $horaN;}
    public function setDescripcion($descripcionN){$this->descripcion = $descripcionN;}
    public function setCreated_at($created_atN){$this->created_at = $created_atN;}
    public function setUpdated_at($updated_atN){$this->updated_at = $updated_atN;}
    public function setIdUbicacion($idUbicacionN){$this->idUbicacion = $idUbicacionN;}
    public function setIdPublicacionEstado($idPublicacionEstadoN){$this->idPublicacionEstado = $idPublicacionEstadoN;}
    public function setIdCiudad($idCiudadN){$this->idCiudad = $idCiudadN;}
    public function setIdUsuario($idUsuarioN){$this->idUsuario = $idUsuarioN;}

    //set data for view vListaPublicacion (not insert in database)
    public function setTituloUbicacion($vTituloUbicacionN){$this->vTituloUbicacion = $vTituloUbicacionN;}
    public function setTituloPublicacionEstado($vTituloPublicacionEstadoN){return $this->vTituloPublicacionEstado = $vTituloPublicacionEstadoN;}
    public function setTituloCiudad($vTituloCiudadN){return $this->vTituloCiudad = $vTituloCiudadN;}
    public function setTituloCiudadCompleta($vTituloCiudadCompletaN){return $this->vTituloCiudadCompleta = $vTituloCiudadCompletaN;}
    public function setNombreUsuario($vNombreUsuarioN){return $this->vNombreUsuario = $vNombreUsuarioN;}
    

    
    public function insert(Publicacion $publicacionN)
    {
         DB::table($this->table)->insert(array(
            'titulo'        =>          $publicacionN->getTitulo(),
            'fecha'         =>          $publicacionN->getFecha(),
            'hora'          =>          $publicacionN->getHora(),
            'idUbicacion'   =>          $publicacionN->getIdUbicacion(),
            'idCiudad'      =>          $publicacionN->getIdCiudad(),
            'idPublicacionEstado' =>    $publicacionN->getIdPublicacionEstado(),
            'pathVistaPrevia' =>        $publicacionN->getPathImgVideo(),
            'descripcion'   =>          $publicacionN->getDescripcion(),
            'pathImgVideo'   =>         $publicacionN->getPathImgVideo(),
            'idUsuario'      =>         $publicacionN->getIdUsuario()
        ));
        return true;
    }

}
