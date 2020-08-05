<?php

namespace App\Http\Controllers;

use App\Localidad;
use App\Http\Requests\UsuarioCreateRequest;
use Illuminate\Http\Request;
use App\Usuario;
use Session;
use Redirect;


class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = Usuario::paginate(10);
        return view('Administracion/usuario.index',compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Administracion/usuario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsuarioCreateRequest $request)
    {
        $this->validate($request, [
            'ceduladeidentidad'=>'required|min:5|numeric',
            'nombres'=>'required|max:60',
            'genero'=>'required|max:60',
            'estadocivil'=>'required|max:60',
            'gradodeinstruccion'=>'required|max:60',
            'idresidencia'=>'required'
        ]);

        return redirect('/Administracion/usuario')->with('message','Usuario Registrado Exitosamente');
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

        $usuario = Usuario::where('id', '=', $id)->get()->first();
        $localidad = Localidad::where('id', '=', $id)->get()->first();
        return view('Administracion/usuario.edit', ['usuario' => $usuario,'localidad' => $localidad]);
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
        $this->validate( $request, [
            'cedulaidentidad'=>'required|numeric|min:7',
            'fechadenacimiento' => 'required|date',
        ]);

        $usuario = Usuario::where('id', '=', $id)->get()->first();
        if ($request['idlocalidad'] == '') {
            $request['idlocalidad'] = null;
        }
        $usuario->update($request->all());
        $usuario->save();
        Session::flash('message', 'Usuario Editado Correctamente');
        return Redirect::to('/Administracion/usuario');
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
