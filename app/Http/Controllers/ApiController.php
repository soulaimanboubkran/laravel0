<?php

namespace App\Http\Controllers;

use App\Models\Api1;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index(){
        $Api1 = Api1::all();
        $data = [
            'persons'=>$Api1,
        ];
        return response()->json($data,200);

    }
}
