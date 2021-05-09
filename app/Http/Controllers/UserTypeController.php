<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


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
        $tipousuarios->nombre=$request->nombre;
        $tipousuarios->save();
        toast('Rol ha sido de Alta','success')->autoClose(2500)->timerProgressBar()->hideCloseButton();
        return redirect()-> route('reportetipousuario');
    }
}
