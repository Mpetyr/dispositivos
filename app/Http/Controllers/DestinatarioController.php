<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dispositivos;
use App\Models\Categorias;
use App\Models\Destinatarios;

class DestinatarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $destinatarios= Destinatarios::all();
        return view('destinatario.index')->with('destinatarios', $destinatarios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('destinatario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $destinatario = new Destinatarios();

        $destinatario->id = $request->get('id');
        $destinatario->nombre_destinatario = $request->get('nombre_destinatario');
        $destinatario->apellido = $request->get('apellido');
        $destinatario->email = $request->get('email');

        $destinatario->save();

        return redirect('/destinatario');
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
        $destinatario = Destinatarios::find($id);
        return view('destinatario.edit')->with('destinatario', $destinatario);
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
        $destinatario = Destinatarios::find($id);

        $destinatario->id = $request->get('id');
        $destinatario->nombre_destinatario = $request->get('nombre_destinatario');
        $destinatario->apellido = $request->get('apellido');
        $destinatario->email = $request->get('email');

        $destinatario->save();

        return redirect('/destinatario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destinatario = Destinatarios::find($id);
        $destinatario->delete();

        return redirect('/destinatario');
    }
}
