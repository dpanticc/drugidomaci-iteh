<?php

namespace App\Http\Controllers;

use App\Models\Proizvod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProizvodController extends Controller
{
    
    public function getById($id){
        $proizvod= Proizvod::find($id);
        if(is_null($proizvod)){
            return response()->json(["message"=>"Nema datog proizvoda"],404);
        }
        return response()->json($proizvod,200);
    }

     public function getAll(){
        $proizvod = DB::table('proizvods')->get();

        return response()->json([
            'proizvods' => $proizvod
        ]);
    }


}
