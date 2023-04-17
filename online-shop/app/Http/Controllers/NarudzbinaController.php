<?php

namespace App\Http\Controllers;

use App\Models\Narudzbina;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class NarudzbinaController extends Controller
{
    public function getAll(){
        $nb = DB::table('narudzbinas')->get();

        return response()->json([
            'narudzbinas' => $nb
        ]);
    }

    public function getByName($ime){
        $narudzbina = Narudzbina::where('ime', $ime)->first();
        if(is_null($narudzbina)){
            return response()->json(["message"=>"Nema narudzbine sa tim imenom"],404);
        }
        return response()->json($narudzbina,200);
    }

}
