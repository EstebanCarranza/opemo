<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Publicacion;

class publicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $var = new Publicacion();

        $var->setTitulo($request->input('titulo'));
        //$var->setFecha($request->input('fecha'));
        //$var->setHora($request->input('hora'));
        $var->setIdUbicacion($request->input('ubicacion'));
        $var->setIdCiudad($request->input('municipio'));
        $var->setDescripcion($request->input('descripcionLarga'));
        $var->setIdUsuario($request->input('idUsuario'));
        //$var->setPathImgVideo($request->photo->store('imgPublicacion'));
        
        DB::table('tbl_publicacion')->insert(array(
            'titulo'        =>  $var->getTitulo(),
            'fecha'         => '2019-05-01',
            'hora'          => '10:10:10',
            'idUbicacion'   =>  $var->getIdUbicacion(),
            'idCiudad'      =>  $var->getIdCiudad(),
            'idPublicacionEstado' => 3,
            'pathVistaPrevia' => 'adfaf',
            'descripcion'   =>  $var->getDescripcion(),
            'pathImgVideo'   => 'adfafds',
            'idUsuario'      => $var->getIdUsuario()
        ));
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
        //
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
