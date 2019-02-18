<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Establecimientos;
use App\Http\Controllers\Controller;

class autocompleteEstablecimiento extends Controller
{
    //

    public function autoCompleteEstablecimiento(Request $request) {
        $query = $request->get('term','');
        $establecimientos= Establecimientos::where('cod_establecimiento','LIKE','%'.$query.'%')->get();
        $data=array();

        foreach ($establecimientos as $establecimiento) {
                $data[]=array(
                    'establecimiento'=>$establecimiento->ESTABLECIMIENTO,
                    'cod_establecimiento'=>$establecimiento->cod_establecimiento
                );
        }

        if(count($data))
             return $data;
        else
            return ['value'=>'No se encontro el codigo...','id'=>''];
    }
}
