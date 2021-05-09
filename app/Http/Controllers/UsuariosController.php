<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tipousuarios;
use App\Models\usuarios;

class UsuariosController extends Controller
{
    public function guardarusuario(Request $request){

        $usuarios= new usuarios();
        $usuarios->nombre=$request->nombre;
        $usuarios->app=$request->app;
        $usuarios->apm=$request->apm;
        $usuarios->correo=$request->correo;
        $usuarios->password=$request->password;
        $usuarios->id_tipousu=$request->typeuser;
        $usuarios->save();
        return redirect()-> route('reporteusuarios');
    }
    public function reporteusuarios(){

        $tipouser=tipousuarios::withTrashed()
        ->orderBy('id_tipousu')
        ->get();
       
        $usuarios = usuarios::withTrashed()->join('tipousuarios','usuarios.id_tipousu','=','tipousuarios.id_tipousu')
        ->select('usuarios.id_usu','usuarios.nombre','usuarios.app','usuarios.apm','usuarios.correo',
        'usuarios.password','tipousuarios.nombre as tipo_usuario','usuarios.deleted_at')
        ->orderby('usuarios.id_usu')
        ->get();
        return view('usuarios/reporteusuarios')
        ->with('tipouser',$tipouser)
        ->with('usuarios',$usuarios);
    }
}
