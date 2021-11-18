<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dispositivos;
use App\Models\Reservas;
use App\Models\Destinatarios;
use App\Models\Categorias;

class ReservasUsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dispositivosReservados = Reservas::join('dispositivos', 'reservas.dispositivos', '=', 'dispositivos.id')
        ->join('users', 'reservas.email', '=', 'users.id')
        ->join('sessions', 'reservas.email', '=', 'sessions.user_id')->get();
        /* 
        $reservas = dispositivos::join('reservas', 'dispositivos.id', 'reservas.dispositivos');
 */        return view('reservas_usuario.index')->with('dispositivosReservados', $dispositivosReservados);
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
        $dispositivoReservado = Reservas::find($id);
        $dispositivoReservado->delete();

        return redirect('/reservas_usuario');
    }
}
