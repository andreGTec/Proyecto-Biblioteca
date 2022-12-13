<?php

namespace App\Http\Controllers;
use App\Models\libro;


use Illuminate\Http\Request;

class CatalogoController extends Controller
{
    public function index()
    {
        $datos['libros']=libro::paginate(20);
        return view('catalogo', $datos);
        
    }
}
