<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormularioController extends Controller
{

    function guardar(Request $request){
        $numeroIntroducido = $request->input("numero");
        $numeroMax=10000000000;
        $numeroMin=0;
        $flag=true;
        while($flag){
            $numeroPromedio=($numeroMax+$numeroMin)/2;
            if($numeroPromedio==$numeroIntroducido){
                $flag=false;
            }elseif($numeroPromedio<$numeroIntroducido){
                $numeroMin=$numeroPromedio;
            }elseif($numeroPromedio>$numeroIntroducido){
                $numeroMax=$numeroPromedio;
            }
        }
        return view ('Formulario', ['numeroMitad' => $numeroPromedio]);
    }
}
