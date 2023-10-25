<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatriceController extends Controller
{
    //

    public function index(){
        return view("calculatrice.index");
    }
    public function calculer(Request $request){
        $input = $request->all();
        $result = 0;


        if ($input["operation"]== 'addition'){
            $result = $input['nombre1'] + $input['nombre2'];
        }elseif ($input['operation'] == 'soustraction') {
            $result = $input['nombre1'] - $input['nombre2'];
        } elseif ($input['operation'] == 'multiplication') {
            $result = $input['nombre1'] * $input['nombre2'];
        } elseif ($input['operation'] == 'division') {
            $result = $input['nombre1'] / $input['nombre2'];
        }
        return view('calculatrice.index', ['result' => $result]);

    }
}
