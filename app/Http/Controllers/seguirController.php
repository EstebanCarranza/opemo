<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Models\Seguir;
use App\Http\Database\seguirDatabase;

class seguirController extends Controller
{
    //
    public function getSeguidoresList($id)
    {
        $user_info = \Auth::User();

        $dbListaSeguidores = \DB::table('tbl_seguir')->select()
            ->where('idUsuarioSeguidor', $user_info->id)
            ->where('idUsuarioSiguiendo',$id)
            ->get();
        
        
    }
    public function getSiguiendoList($id)
    {
        $user_info = \Auth::User();

        $dbListaSiguiendo = \DB::table('tbl_seguir')->select()
            ->where('idUsuarioSeguidor', $user_info->id)
            ->where('idUsuarioSiguiendo',$id)
            ->get();
    }

    public function getSeguir($id)
    {
        $user_info = \Auth::User();
        $db = new seguirDatabase();
        $sigue = \DB::table($db->getTable())->select()
            ->where($db->getIdUsuarioSeguidor(), $user_info->id)
            ->where($db->getIdUsuarioSiguiendo(),$id)
            ->first();
        
        if($sigue)
            return true;
        else
            return false;
        
    }
    public function seguir(Request $request)
    {
        if($request->idUsuarioSiguiendo)
        {
            $user_info = \Auth::User();
            $dbSeguir = new seguirDatabase();
            $data = new Seguir();
            $sigue = \DB::table($dbSeguir->getTable())->select()
            ->where($dbSeguir->getIdUsuarioSeguidor(), $user_info->id)
            ->where($dbSeguir->getIdUsuarioSiguiendo(),$request->idUsuarioSiguiendo)
            ->first();

            
            $data->setIdUsuarioSeguidor($user_info->id);
            $data->setIdUsuarioSiguiendo($request->idUsuarioSiguiendo);

            if($sigue)
            {
                $data->setIdSeguir($sigue->idSeguir);
                
                DB::table($dbSeguir->getTable())
                    ->where($dbSeguir->getIdSeguir(), $data->getIdSeguir())
                    ->where($dbSeguir->getIdUsuarioSeguidor(), $data->getIdUsuarioSeguidor())
                    ->where($dbSeguir->getIdUsuarioSiguiendo(), $data->getIdUsuarioSiguiendo())
                    ->delete();
               //return back()->withInput(['id' => $data->getIdUsuarioSiguiendo(), 'seguir'=>true]);
               return back();
            }
            else {
                    DB::table($dbSeguir->getTable())->insert(
                        array(
                                $dbSeguir->getIdUsuarioSeguidor() => $data->getIdUsuarioSeguidor(),
                                $dbSeguir->getIdUsuarioSiguiendo() => $data->getIdUsuarioSiguiendo(),
                                $dbSeguir->getCreated_at()  => $data->getCreated_at(),
                                $dbSeguir->getUpdated_at() => $data->getUpdated_at()
                        )
                    );
                   // return back()->withInput(['id' => $data->getIdUsuarioSiguiendo(), 'seguir' => false]);
                   return back();
            }
                    
        }
    }
    
}
