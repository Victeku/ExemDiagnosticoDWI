<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tipousuarios;


class AccessController extends Controller
{
    public function main(){
        $tipouser=tipousuarios::all();
        return view('layoutmain')
        ->with('tipouser',$tipouser);
    }
}
