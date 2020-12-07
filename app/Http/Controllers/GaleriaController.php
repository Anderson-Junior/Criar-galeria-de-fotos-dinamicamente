<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeria;

class GaleriaController extends Controller
{
    public function novaGaleria(){
        return view('galeria.nova-galeria');
    }

    public function salvarGaleria(Request $request){
        $dados = $request->all();
        Galeria::create($dados);

        return redirect('lista-galeria');
    }

    public function listaGaleria(){
        $galerias = \App\Models\Galeria::all();

        return view('galeria.lista-galerias', compact('galerias'));
    }
}
