<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classe;
class ClasseController extends Controller
{
    public function novaClasse(){
        return view('galeria.nova-classe');
    }

    public function salvarClasse(Request $request){
        $dados = $request->all();
        Classe::create($dados);

        return redirect('lista-classes');
    }

    public function listaClasses(){
        $classes = Classe::all();
        return view('galeria.lista-classes', compact('classes'));
    }
}
