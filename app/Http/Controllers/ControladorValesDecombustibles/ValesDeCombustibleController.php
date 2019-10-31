<?php

namespace App\Http\Controllers\ControladorValesDecombustibles;

use App\Http\Controllers\Controller;
use App\ModeloValesDeCombustible\ValesDeCombustible;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ValesDeCombustibleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datosvales = ValesDeCombustible::all();
        return view('valesdecombustibles.indexvale',compact('datosvales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datosvehiculo = DB::table('vehiculos')
            ->select("placa_id")
            ->whereNull('deleted_at')
            ->groupBy('placa_id')
            ->get();
        return view('valesdecombustibles.createvale',compact('datosvehiculo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vale = new ValesDeCombustible();
        $vale->fecha_entrega=$request->fecha_entrega;
        $vale->placa_id=$request->placa_id;
        $vale->save();
        return redirect()->route('vale.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ModeloValesDeCombustible\ValesDeCombustible  $valesDeCombustible
     * @return \Illuminate\Http\Response
     */
    public function show( $valesDeCombustible)
    {
        $datosvehiculo = DB::table('vehiculos')
            ->select("placa_id")
            ->whereNull('deleted_at')
            ->groupBy('placa_id')
            ->get();
        $datosvales = ValesDeCombustible::find($valesDeCombustible);
        return view('valesdecombustibles.showvale',compact('datosvehiculo','datosvales'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ModeloValesDeCombustible\ValesDeCombustible  $valesDeCombustible
     * @return \Illuminate\Http\Response
     */
    public function edit( $valesDeCombustible)
    {
        $datosvehiculo = DB::table('vehiculos')
            ->select("placa_id")
            ->whereNull('deleted_at')
            ->groupBy('placa_id')
            ->get();
        $datosvales = ValesDeCombustible::find($valesDeCombustible);
        return view('valesdecombustibles.editvale',compact('datosvehiculo','datosvales'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ModeloValesDeCombustible\ValesDeCombustible  $valesDeCombustible
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $valesDeCombustible)
    {
        $vale = ValesDeCombustible::find($valesDeCombustible);
        $vale->fecha_entrega=$request->fecha_entrega;
        $vale->placa_id=$request->placa_id;
        $vale->update();
        return redirect()->route('vale.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ModeloValesDeCombustible\ValesDeCombustible  $valesDeCombustible
     * @return \Illuminate\Http\Response
     */
    public function destroy( $valesDeCombustible)
    {
        ValesDeCombustible::find($valesDeCombustible)->delete();
        return  redirect()->route('vale.index');
    }
}
