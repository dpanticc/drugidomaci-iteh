<?php

namespace App\Http\Controllers;

use App\Models\Narudzbina;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;




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

    public function store(Request $request){

        $validator = Validator::make($request->all(),[
            'ime'=>'required|string|max:225',
            'prezime'=>'required|string|max:225',
            'grad'=>'required|string|max:225',
            'adresa'=>'required|string|max:225',
            'telefon'=>'required|string|max:10',
            'email'=>'required|string|max:255|email|unique:users',
        ]);

        if($validator->fails())
            return response()->json($validator->errors());

        $narudzbina = Narudzbina::create([
            'ime'=>$request->ime,
            'prezime'=>$request->prezime,
            'grad'=>$request->grad,
            'adresa'=>$request->adresa,
            'telefon'=>$request->telefon,
            'email'=>$request->email,
            'user_id'=>Auth::user()->id,
        ]);

        return response()->json(['Vasa narudzbina je kreirana!']);
    }

    public function destroy(Narudzbina $narudzbina){
        $narudzbina->delete();

        return response()->json('Narudzbina is deleted successfully.');
    }

}
