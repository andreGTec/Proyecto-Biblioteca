<?php

namespace App\Http\Controllers;
use App\Models\confirmarcompra;


use Illuminate\Http\Request;

class RegistroController extends Controller
{
    public function index()
    {
        $datos['confirmarcompras']=confirmarcompra::paginate(20);
        return view('Registros.registro', $datos);
    }
}
