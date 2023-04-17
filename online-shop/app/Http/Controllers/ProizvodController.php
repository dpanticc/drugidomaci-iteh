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

    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'naziv'=>'required|min:2',
            'opis'=>'required|min:2',
            'slika'=>'required|min:2',
            'cena'=>'required',
            'energetski_razred'=>'required',
            'boja'=>'required|min:2',
            'materijal'=>'required|min:2',
            'dimenzije'=>'required|min:2',
            'vrsta_id'=>'required',

        ]);

        if ($validator->fails()) {
            return response()->json(["message"=>"Sva polja su obavezna"],400);
        }
        $proizvod= Proizvod::create($request->all());
        return response()->json($proizvod, 201);
    }
    
    public function delete($id) {
        $proizvod = Proizvod::find($id);
    
        if (is_null($proizvod)) {
            return response()->json(['message' => 'Proizvod not found'], 404);
        }
    
        $proizvod->delete();
    
        return response()->json(['message' => 'Proizvod deleted successfully']);
    }
    
}
