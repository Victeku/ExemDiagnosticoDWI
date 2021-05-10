<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;


use App\Models\tipousuarios;

class UserTypeController extends Controller
{
    public function reportetipousuario(){
        $tipouser=tipousuarios::withTrashed()
        ->orderBy('id_tipousu')
        ->get();
        return view('tipousuariofolder/tipousuarioreport')
        ->with('tipouser',$tipouser);
    }

    public function guardartipousuario(Request $request){

        $tipousuarios = new tipousuarios;
        $tipousuarios->id_tipousu=$request->id_tipousu;
        $tipousuarios->nombre=$request->nombre;
        $tipousuarios->save();
        toast('Rol ha sido de Alta','success')->autoClose(2500)->timerProgressBar()->hideCloseButton();
        return redirect()-> route('reportetipousuario');
    }
    public function borrauser($id_tipousu){
      
        $tipousuarios=tipousuarios::withTrashed()->find($id_tipousu)->forceDelete();
        toast('Rol ha sido Eliminado','success')->autoClose(2500)->timerProgressBar()->hideCloseButton();
        return redirect()-> route('reporteusuarios');
    }
       
}
