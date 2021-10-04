<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dispositivos;
use App\Models\Reservas;
use App\Models\Categorias;

class ReservaController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$dispositivos = dispositivos::all();
        //$dispositivos = dispositivos::join('categorias', 'dispositivos.id_tipo_audiovisual', '=', 'categorias.id')->get();

        $dispositivos = Categorias::join('dispositivos', 'dispositivos.id_tipo_audiovisual', '=', 'categorias.id')->get();
        return view('reserva.index')->with('dispositivos', $dispositivos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( Request $request)
    {
        $reserva = new Reservas();
/*         $dispositivo = dispositivos::all($id);

        $dispositivo->id = $request->get('id'); */
        $reserva->fecha = $request->get('fecha');
        $reserva->cedula = $request->get('cedula');
        $reserva->dispositivos = $request->get('dispositivos');

        $reserva->save();

        return redirect('/reserva');
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