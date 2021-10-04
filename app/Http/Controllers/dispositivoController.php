<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dispositivos;
use App\Models\Categorias;

class dispositivoController extends Controller
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
        //$categorias = Categorias::where("id", "=", $dispositivos)->select("nombre");
        //JOIN: 'tabla a traer', 'columna foránea', '=', 'columna primaria de la otra tabla'
        //$dispositivos = dispositivos::join('categorias', 'dispositivos.id_tipo_audiovisual', '=', 'categorias.id')->get();
        /* $dispositivos = dispositivos::join('dispositivos', 'dispositivos.id_tipo_audiovisual' , '=', 'categoria.id')->get(); */
        
        $dispositivos = Categorias::join('dispositivos', 'dispositivos.id_tipo_audiovisual', '=', 'categorias.id')->get();
        return view('dispositivo.index')->with('dispositivos', $dispositivos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categorias::all();
        return view('dispositivo.create')->with('categorias', $categorias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $dispositivo = new dispositivos();

        $dispositivo->codigo = $request->get('codigo');
        $dispositivo->tipo = $request->get('tipo');
        $dispositivo->marca = $request->get('marca');
        $dispositivo->modelo = $request->get('modelo');
        $dispositivo->id_tipo_audiovisual = $request->get('categoria');

        $dispositivo->save();

        return redirect('/dispositivo');
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
        $dispositivo = dispositivos::find($id);
        $categorias = Categorias::all();
        return view('dispositivo.edit')->with('dispositivo', $dispositivo)->with('categorias', $categorias);
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
        $dispositivo = dispositivos::find($id);
        $categorias = Categorias::all();

        $dispositivo->codigo = $request->get('codigo');
        $dispositivo->tipo = $request->get('tipo');
        $dispositivo->marca = $request->get('marca');
        $dispositivo->modelo = $request->get('modelo');
        $dispositivo->id_tipo_audiovisual = $request->get('categoria');

        $dispositivo->save();

        return redirect('/dispositivo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dispositivo = dispositivos::find($id);
        $dispositivo->delete();

        return redirect('/dispositivo');
    }
}
