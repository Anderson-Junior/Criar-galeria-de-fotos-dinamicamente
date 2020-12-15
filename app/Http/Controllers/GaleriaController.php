<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeria;

class GaleriaController extends Controller
{
    public function novaGaleria(){
        return view('galeria.nova-galeria');
    }

    public function salvarGaleria($secretaria, Request $request){
        $dados = $request->all();
        $dados['secretaria_id'] = $secretaria;
        Galeria::create($dados);

        return redirect()->route('lista-galeria', ['secretaria'=>$secretaria]);
    }

    public function listaGaleria($secretaria_id){
        $galerias = Galeria::select('galeria.id',
                                    'galeria.nome')
                            ->where('galeria.secretaria_id', $secretaria_id)->get();

        return view('galeria.lista-galerias', compact('galerias', 'secretaria_id'));
    }

    public function editarGaleria($id){
        $galeria = Galeria::where('id', $id)->first();
        return view('galeria.editar-galeria', compact('galeria'));
    }

    public function salvarEdicao(Request $request){
        $dados = $request->all();
        $galeria = Galeria::where('id', $dados['id'])->first();
        $galeria->update($dados);

        return redirect()->route('lista-galeria', ['secretaria' => $galeria->secretaria_id]);
    }

    public function excluirGaleria($id){
        $galeria = Galeria::where('id', $id)->delete();
        return back();
    }
}
