<?php

namespace laradex\Http\Controllers;
use laradex\Usuario;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$order = Usuario::find(\DB::table('usuarios')->max('id')); 
        //$us=Usuario::select('nombre')->where('id',$order->id )->get();
        //return view('Users.index', ['nombre'=>$us[0]->nombre]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new Usuario();
        $user->nombre = $request->input('Nombre');
        $user->apellido = $request->input('Apellido');
        $user->edad = $request->input('Edad');
        $user->correo = $request->input('Correo');
        $user->contraseña = $request->input('Contraseña');
        $user->save();
        $order = Usuario::find(\DB::table('usuarios')->max('id')); 
        $us=Usuario::select('nombre')->where('id',$order->id )->get();
        return view('Users.index', ['nombre'=>$us[0]->nombre]);
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
