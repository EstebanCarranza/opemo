<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $cardsData;
    protected function getData()
    {
        $this->cardsData = array( 
            array
            (
                'title' => 'Mi perfil',
                'link' => '/profile',
                'description' => 'Aquí podrás ver los mensajes de conversación sobre los reclamos que hayas hecho'
            ),
            array
            (
                'title' => 'Mensajes',
                'link' => '/messages',
                'description' => 'Aquí podrás ver los mensajes de conversación sobre los reclamos que hayas hecho'
            ), 
            array
            (
                'title' => 'Mis publicaciones',
                'link' => '/my-publications',
                'description' => 'Aquí podrás ver, crear, editar y eliminar tus publicaciones creadas'
            ),
            array
            (
                'title' => 'Mis ubicaciones',
                'link' => '/my-ubications',
                'description' => 'Aquí podrás ver, crear, editar y eliminar tus ubicaciones creadas'
            ),
            array
            (
                'title' => 'Mis objetos recuperados',
                'link' => '/my-recovery-objects',
                'description' => 'Aquí podrás ver los objetos que has recuperado en opemo'
            ),
            array
            (
                'title' => 'Usuarios reportados',
                'link' => '/my-user-reports',
                'description' => 'Aquí podrás ver y bloquear a los usuarios que han sido reportados por la comunidad'
            )
            
        );
        return $this->cardsData;
    }

    public function index()
    {
        //
        if(\Auth::guest())
            return redirect('/');
        else
            return view('pages.dashboard')->with('cardsData',$this->getData());
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
        return view('pages.dashboard')->with('cardsData',$this->getData());
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
