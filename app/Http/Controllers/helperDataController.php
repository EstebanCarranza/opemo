<?php

namespace App\Http\Controllers;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Http\Models\Ubicacion;
use App\Http\Database\ubicacionDatabase;
use App\Http\Database\comentarioDatabase;
use App\Http\Database\publicacionReportadaDatabase;


class helperDataController extends Controller
{
    
    public function __constructor()
    {

    }
    public function index()
    {
       
    }
    public function getUbicationsForUser()
    {
        $user_info = \Auth::user();
        $data = new Ubicacion();
        $dbUbicacion = new ubicacionDatabase();
        $ubiData = DB::table($data->getTableName())
            ->select($dbUbicacion->getIdUbicacion(), $dbUbicacion->getTitulo())
                ->where($dbUbicacion->getIdUsuario(), $user_info->id)->get();

         return response()->json($ubiData);
    }
    public function getCommentList(Request $request)
    {
        if($request->id)
        {
            $dbComentarios = new comentarioDatabase();
            $comentarios = $dbList = DB::table($dbComentarios->getView())->select()
                ->where($dbComentarios->getIdPublicacion(), $request->id)
                ->orderBy('created_at', 'asc')
                ->get();
            
            return response()->json($comentarios);
            //return var_dump($comentarios);
        }
       
    }
    public function getPuReLi(Request $request)
    {
        //get Publication Report List
        $dbPublicacionReportada = new publicacionReportadaDatabase();
        $lista = DB::table($dbPublicacionReportada->getView())->select()
                ->orderBy('created_at', 'asc')
                ->get();
            
        return response()->json($lista);
    }
    
   
}
