<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imagem;

class ImagemController extends Controller
{
    public function listaImagem(){
        $imagem = Imagem::all();
        return view('galeria.lista-imagem', compact('imagem'));
    }

    public function novaImagem(){
        return view('galeria.nova-imagem');
    }

    public function salvarImagem($categoria, Request $request)
    {
        $dados['escrita'] = $request->escrita;
        $dados['categoria_id'] = $categoria;

        if($request->hasFile('image')){

            $dados['img_grande'] = $request->file('image')->store('public/galeria');
            $dados['alt'] = $request->file('image')->getClientOriginalName();

            $imagem = Imagem::create($dados);
        }
        return redirect('lista-imagem');
    }
}
