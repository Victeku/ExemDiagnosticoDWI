<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        return redirect()-> route('reportetipousuario');
    }
}
