<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Models\Publicacion;
use Illuminate\Http\File;


class publicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $table = "tbl_publicacion";
    protected $view = "vListaPublicacion";
     

    public function index()
    {

        return view('publicaciones.index')->with('cardTitle','Publicaciones')
                ->with('publicationList', $this->publicationList());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('publicaciones.create');   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $user_info = \Auth::user();
        $var = new Publicacion();

        $var->setTitulo($request->input('titulo'));
        $var->setFecha($request->input('fecha'));
        $var->setHora($request->input('hora'));
        $var->setIdUbicacion($request->input('ubicacion'));
        //$var->setIdCiudad(1);
        $var->setDescripcion($request->input('descripcionLarga'));
        $var->setIdUsuario($request->input('idUsuario'));
        $var->setIdPublicacionEstado(3);
        
        
        $pathPublicacion = "users/".$user_info->id."/publicaciones/".time();
        Storage::makeDirectory($pathPublicacion);

        $media_file = $request->file('imgPublicacion');
        if($media_file)
        {
            //$media_file->getClientOriginalName()
            $name_file = time()."_".$user_info->id."_".substr($media_file->getClientOriginalName(), -5);
            $var->setPathImgVideo($pathPublicacion."/".$name_file);
            Storage::putFileAs($pathPublicacion, $media_file,$name_file);
           /* \Storage::disk($pathPublicacion)->put(
                $var->getPathImgVideo(),
                \File::get($media_file)
            );*/
        }else 
            $var->setPathImgVideo('');

        //$var->setPathImgVideo($request->photo->store('imgPublicacion'));
        

        $var->insert($var);

        return view('pages.dashboard');    

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $publicacion = DB::table($this->view)->select()->where('idPublicacion', $id)->first();
        $data = new publicacion();
        $data->setIdPublicacion($publicacion->idPublicacion);
        //titulo cambia a tituloPublicacion por la vista vListaPublicacion
        $data->setTitulo($publicacion->tituloPublicacion);
        $data->setPathImgVideo($publicacion->pathImgVideo);
        $data->setFecha($publicacion->fecha);
        $data->setHora($publicacion->hora);
        $data->setDescripcion($publicacion->descripcion);
        $data->setCreated_at($publicacion->created_at);
        $data->setUpdated_at($publicacion->updated_at);
        $data->setIdUbicacion($publicacion->idUbicacion);
        $data->setIdPublicacionEstado($publicacion->idPublicacionEstado);
        $data->setIdCiudad($publicacion->idCiudad);
        $data->setIdUsuario($publicacion->idUsuario);
        //datos de la vista vListaPublicacion
        $data->setNombreUsuario($publicacion->name);
        $data->setTituloUbicacion($publicacion->tituloUbicacion);
        $data->setTituloPublicacionEstado($publicacion->tituloPublicacionEstado);
        $data->setTituloCiudad($publicacion->tituloCiudad);
        $data->setTituloCiudadCompleta($publicacion->tituloCiudadCompleto);
        
        return view("publicaciones.show")->with('publicacionData', $data);
    
    }

    public function publicationList()
    {
        $dbPublicacion = DB::table($this->view)->select()->get();
        $publicacionList = array();
        foreach($dbPublicacion as $publicacion)
        {
            $data = new publicacion();
            $data->setIdPublicacion($publicacion->idPublicacion);
            //titulo cambia a tituloPublicacion por la vista vListaPublicacion
            $data->setTitulo($publicacion->tituloPublicacion);
            $data->setPathImgVideo($publicacion->pathImgVideo);
            $data->setFecha($publicacion->fecha);
            $data->setHora($publicacion->hora);
            $data->setDescripcion($publicacion->descripcion);
            $data->setCreated_at($publicacion->created_at);
            $data->setUpdated_at($publicacion->updated_at);
            $data->setIdUbicacion($publicacion->idUbicacion);
            $data->setIdPublicacionEstado($publicacion->idPublicacionEstado);
            $data->setIdCiudad($publicacion->idCiudad);
            $data->setIdUsuario($publicacion->idUsuario);
            //datos de la vista vListaPublicacion
            $data->setNombreUsuario($publicacion->name);
            $data->setTituloUbicacion($publicacion->tituloUbicacion);
            $data->setTituloPublicacionEstado($publicacion->tituloPublicacionEstado);
            $data->setTituloCiudad($publicacion->tituloCiudad);
            $data->setTituloCiudadCompleta($publicacion->tituloCiudadCompleto);
            //agregar publicaciones al arreglo de objetos
            array_push($publicacionList, $data);

        }
        return $publicacionList;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
