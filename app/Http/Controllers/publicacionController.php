<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Publicacion;
use Illuminate\Http\File;

class publicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     

    public function index()
    {
        return view('pages.publist')->with('cardTitle','Publicaciones')
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
        $var->setIdCiudad($request->input('municipio'));
        $var->setDescripcion($request->input('descripcionLarga'));
        $var->setIdUsuario($request->input('idUsuario'));
        
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

        /*
        DB::table('tbl_publicacion')->insert(array(
            'titulo'        =>  $var->getTitulo(),
            'fecha'         => $var->getFecha(),
            'hora'          => $var->getHora(),
            'idUbicacion'   =>  $var->getIdUbicacion(),
            'idCiudad'      =>  $var->getIdCiudad(),
            'idPublicacionEstado' => 3,
            'pathVistaPrevia' => $var->getPathImgVideo(),
            'descripcion'   =>  $var->getDescripcion(),
            'pathImgVideo'   => $var->getPathImgVideo(),
            'idUsuario'      => $var->getIdUsuario()
        ));*/
        //'hora'          =>  $var->getHora(),
        //'fecha'         =>  $var->getFecha(),
        //'pathImgVideo'  =>  $var->getPathImgVideo()  
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
        
        $publicacion = DB::table('tbl_publicacion')->select()->where('idPublicacion', $id)->get();

        $publicacionList = array();
        
        foreach($publicacion as $publicacion)
        {
            $data = new publicacion();

            $data->setIdPublicacion($publicacion->idPublicacion);
            $data->setTitulo($publicacion->titulo);
            $data->setPathImgVideo($publicacion->pathImgVideo);
            $data->setFecha($publicacion->fecha);
            $data->setHora($publicacion->hora);
            $data->setDescripcion($publicacion->descripcion);
            $data->setCreated_at($publicacion->created_at);
            $data->setUpdated_at($publicacion->updated_at);
            $data->setIdUbicacion($publicacion->idUbicacion);
            $data->setIdPublicacion($publicacion->idPublicacionEstado);
            $data->setIdCiudad($publicacion->idCiudad);
            $data->setIdUsuario($publicacion->idUsuario);
            array_push($publicacionList, $data);
            //echo $data->titulo . "- " . $data->descripcion . "<br>";
        }
             $response = response()->make(Storage::get( $publicacionList[0]->getPathImgVideo()), 200);
            $response->header("Content-Type", 'image/png');
            return $response;
    
    }
    public function publicationList()
    {
         $publicacion = DB::table('tbl_publicacion')->select()->get();

        $publicacionList = array();
        
        foreach($publicacion as $publicacion)
        {
            $data = new publicacion();

            $data->setIdPublicacion($publicacion->idPublicacion);
            $data->setTitulo($publicacion->titulo);
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
            array_push($publicacionList, $data);
            //echo $data->titulo . "- " . $data->descripcion . "<br>";
        }
             //$response = response()->make(Storage::get( $publicacionList[0]->getPathImgVideo()), 200);
            //$response->header("Content-Type", 'image/png');
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
