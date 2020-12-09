<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Galeria;

class CategoriaController extends Controller
{
    public function novaCategoria(){
        $galerias = Galeria::all();
        return view('galeria.nova-categoria', compact('galerias'));
    }

    public function salvarCategoria($galeria, Request $request){
        $dados = $request->all();
        $dados['galeria_id'] = $galeria;
        Categoria::create($dados);

        return redirect('lista-categoria');
    }

    public function listaCategoria($galeria_id){
        $categorias = Categoria::select('categoria.id', 'categoria.nome')
                               ->where('categoria.galeria_id', $galeria_id)->get();

        return view('galeria.lista-categorias', compact('categorias'));
    }
}
