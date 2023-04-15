<?php

namespace App\Http\Controllers;

use App\Models\Vrsta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VrstaController extends Controller
{
    
    public function getAll(){
        $vrsta = DB::table('vrstas')->get();

        return response()->json([
            'vrstas' => $vrsta
        ]);
    }

    public function getById($id){
        $vrsta = DB::table('vrstas')->where('id', $id)->first();

    if (!$vrsta) {
        return response()->json([
            'message' => 'Vrsta not found'
        ], 404);
    }

    return response()->json([
        'vrsta' => $vrsta
    ]);
    }
}
