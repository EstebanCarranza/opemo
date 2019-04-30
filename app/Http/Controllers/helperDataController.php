<?php

namespace App\Http\Controllers;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Http\Models\Ubicacion;
use App\Http\Database\ubicacionDatabase;


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
    
   
}
