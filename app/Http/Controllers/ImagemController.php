<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imagem;
use App\Models\Classe;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image as Image;

class ImagemController extends Controller
{
    public function listaImagem($categoria_id){
        $imagem = Imagem::select('imagem.id', 'imagem.img_thumb', 'imagem.categoria_id')
                        ->where('imagem.categoria_id', $categoria_id)->get();

        return view('galeria.lista-imagem', compact('imagem', 'categoria_id'));
    }

    public function novaImagem(){
        $classes = Classe::all();

        return view('galeria.nova-imagem', compact('classes'));
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

            $imagem->classes()->sync(isset($request->classes) ? explode ( ',', $request->classes) : []);
        }
        return redirect()->route('lista-imagem', ['categoria'=>$categoria]);
    }

    public function editarImagem($id){
        $imagem = Imagem::with('classes')->where('id', $id)->first();
        return view('galeria.editar-imagem', compact('imagem'));
    }

    public function salvarEdicao(Request $request){
        $dados = $request->all();
        $imagem = Imagem::where('id', $dados['id'])->first();
        $imagem->update($dados);$imagem->classes()->sync(isset($request->classes) ? explode ( ',', $request->classes) : []);

        return redirect()->route('lista-imagem', ['categoria' => $imagem->categoria_id]);
    }

    public function excluirImagem($id){
        $imagem = Imagem::where('id', $id)->first();
        Storage::disk('public')->delete($imagem->img_thumb);
        Storage::disk('public')->delete($imagem->img_grande);
        $imagem->delete();
        
        return back();
    }
}
