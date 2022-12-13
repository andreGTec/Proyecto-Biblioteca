<?php

namespace App\Http\Controllers;

use App\Models\libro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; /** Esta clase nos permite borrar el archivo de la imagen */

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['libros']=libro::paginate(20);
        return view('Libro.libro', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Libro.crear');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //$datosLibro = $request->all();
        $datosLibro = $request->except('_token');
        if($request ->hasFile('portada')){
            $datosLibro['portada']=$request->file('portada')->store('uploads','public');
         }
        libro::insert($datosLibro);
    
        //return response()->json($datosLibro);
        return redirect('libro');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function show(libro $libro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $libro=libro::findOrFail($id);
        return view('Libro.editar', compact('libro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosLibro = $request->except(['_token','_method']);
        
        if($request ->hasFile('portada')){
            $libro=libro::findOrFail($id);
            Storage::delete('public/'.$libro -> portada);
            $datosLibro['portada']=$request->file('portada')->store('uploads','public');
         }

        libro::where('id', '=', $id) ->update($datosLibro);
        $libro=libro::findOrFail($id);
        return view('Libro.editar', compact('libro'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $libro=libro::findOrFail($id);
        if(Storage::delete('public/'.$libro -> portada)){
            libro::destroy($id);
        };
        return redirect('libro');
    }
}