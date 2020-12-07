<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function novaCategoria(){
        return view('galeria.nova-categoria');
    }

    public function salvarCategoria(Request $request){
        $dados = $request->all();
        Categoria::create($dados);

        return redirect('lista-categoria');
    }

    public function listaCategoria(){
        $categorias = Categoria::all();

        return view('galeria.lista-categorias', compact('categorias'));
    }
}
