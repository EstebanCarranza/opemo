<?php

namespace App\Http\Database;
use App\Http\Models\Ubicacion;
use Illuminate\Support\Facades\DB;


class ubicacionDatabase
{
    protected $table = "tbl_ubicacion";
    protected $idUbicacion = "idUbicacion";
    protected $titulo = "titulo";
    protected $descripcion = "descripcion";
    protected $created_at = "created_at";
    protected $updated_at = "updated_at";
    protected $idCiudad = "idCiudad";
    protected $idUsuario = "idUsuario";
    protected $pathUbicacion = "pathUbicacion";

    public function __construct()
    {

    }
    public function getIdUbicacion(){return $this->idUbicacion;}
    public function getTitulo(){return $this->titulo;}
    public function getDescripcion(){return $this->decripcion;}
    public function getCreated_at (){return $this->created_at;}
    public function getUpdated_at(){return $this->updated_at;}
    public function getIdCiudad(){return $this->idCiudad;}
    public function getIdUsuario(){return $this->idUsuario;}
    public function getPathUbicacion(){return $this->pathUbicacion;}
    public function insert(Ubicacion $data)
    { 

        DB::table($this->table)->insert(array(
            $this->titulo => $data->getTitulo(),
            $this->descripcion => $data->getDescripcion(),
            $this->idCiudad  => $data->getIdCiudad(),
            $this->idUsuario => $data->getIdUsuario(),
            $this->pathUbicacion => $data->getPathUbicacion()
        ));
        return true;
    }
    public function getUbicationList()
    {
        $ubicaciones = DB::table($this->table)->select()->get();

        $ubicacionList = array();
        
        foreach($ubicaciones as $ubicacion)
        {
            $data = new Ubicacion();

            $data->setIdUbicacion($ubicacion->idUbicacion);
            $data->setTitulo($ubicacion->titulo);
            $data->setDescripcion($ubicacion->descripcion);
            $data->setPathUbicacion($ubicacion->pathUbicacion);
            $data->setIdCiudad($ubicacion->idCiudad);
            $data->setCreated_at($ubicacion->created_at);
            $data->setUpdated_at($ubicacion->updated_at);
           
            array_push($ubicacionList, $data);
           
        }
        return $ubicacionList;
    }
}
