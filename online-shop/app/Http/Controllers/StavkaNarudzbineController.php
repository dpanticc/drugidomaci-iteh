<?php

namespace App\Http\Controllers;

use App\Models\StavkaNarudzbine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class StavkaNarudzbineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'narudzbina_id'=>'required',
            'proizvod_id'=>'required'
        ]);

        if($validator->fails())
            return response()->json($validator->errors());

        $sn = StavkaNarudzbine::create([
            'narudzbina_id'=>$request->narudzbina_id,
            'proizvod_id'=>$request->proizvod_id,

        ]);

        return response()->json(['Stavka narudzbine je kreirana!']);    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $stavkeNarudzbine = StavkaNarudzbine::where('narudzbina_id', $id)->get();
        return response()->json($stavkeNarudzbine);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StavkaNarudzbine $stavkaNarudzbine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, StavkaNarudzbine $stavkaNarudzbine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StavkaNarudzbine $stavkaNarudzbine)
    {
        //
    }
}
