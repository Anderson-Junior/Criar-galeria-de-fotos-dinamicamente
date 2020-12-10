<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imagem;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image as Image;

class ImagemController extends Controller
{
    public function listaImagem($categoria_id){
        $imagem = Imagem::select('imagem.id', 'imagem.img_grande')
                        ->where('imagem.categoria_id', $categoria_id)->get();


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

            $dados['img_grande'] = $request->file('image')->store('galeria/padrao');
            $caminho = explode('/', $dados['img_grande']);

            $dados['img_thumb'] = 'galeria/thumbnail/' . $caminho[count($caminho) -1];
            $thumbnail = Image::make($request->file('image'))->resize(298, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('/storage/' . $dados['img_thumb']));

            $dados['alt'] = $request->file('image')->getClientOriginalName();
            $imagem = Imagem::create($dados);
        }
        return redirect('lista-imagem');
    }
}
