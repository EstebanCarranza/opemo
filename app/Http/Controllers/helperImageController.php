<?php

namespace App\Http\Controllers;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Http\Models\Publicacion;
use App\Http\StaticData\tbl_publicacion;

class helperImageController extends Controller
{
    
    public function __constructor()
    {

    }
    public function index()
    {

    }
    
    public function getPublicationPhoto(Request $request)
    {
        //Si no manda ID solamente retornará la leyenda que este en el "else"
        if($request->id)
        {
            $id = $request->id;
            $data = new publicacion();
            $publicacion = DB::table($data->getTableName())->select(tbl_publicacion::getPath())->where(tbl_publicacion::getId(), $id)->first();
            if($publicacion)
            {
                $data->setPathImgVideo($publicacion->pathImgVideo);
                $response = response()->make(Storage::get($data->getPathImgVideo()), 200);
                $response->header("Content-Type", 'image/png');
                return $response;
            }
            else {return "Imagen no encontrada";}
        }else {
            return "Los datos ingresados no son correctos";
        }
        
    }
    
}
