<?php

namespace App\Http\Controllers;
use App\Models\FICHA;

use Illuminate\Http\Request;

class ObjetosController extends Controller
{
    public function piano() {

        return view('/Objetos/piano/index');

    }
    public function teclado() {

        return view('/Objetos/teclado1/index');

    }
    public function teclado2() {

        return view('/Objetos/teclado2/index');

    }
    public function Escolas() {
        $userCount  =  FICHA::where('status_id', '=', auth()->id())
        ->count(); 

        return view('/Escolas/index', compact('userCount'));

    }
}
