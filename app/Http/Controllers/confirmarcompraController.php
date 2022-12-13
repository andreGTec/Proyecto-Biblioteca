<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\confirmarcompra;

class confirmarcompraController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
        /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        return view('confirmarcompra');
    }
    
    public function confirmarcompraproceso(Request $request){
        $id = auth()->user()->id;
        $compra = New confirmarcompra;
        $compra->metodopago = $request->metodopago;
        $compra->numerotargeta = $request->numerotargeta;
        $compra->fechacaducidad = $request->fechacaducidad;
        $compra->nombre = $request->nombre;
        $compra->apellidos= $request->apellidos;
        $compra->localidad= $request->localidad;
        $compra->codigopostal= $request->codigopostal;
        $compra->pais= $request->pais;
        $compra->telefono= $request->telefono;
        $compra->save();
        return redirect('/');
    }
}
