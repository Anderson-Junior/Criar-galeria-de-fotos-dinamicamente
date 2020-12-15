<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Secretaria;

class SecretariaController extends Controller
{
    public function novaSecretaria(){
        return view('galeria.nova-secretaria');
    }

    public function salvarSecretaria(Request $request){
        $dados = $request->all();
        Secretaria::create($dados);

        return redirect('lista-secretaria');
    }

    public function listaSecretaria(){
        $secretarias = Secretaria::all();

        return view('galeria.lista-secretarias', compact('secretarias'));
    }

    public function editarSecretaria($secretaria){
        $secreta = Secretaria::where('id', $secretaria)->first();
        return view('galeria.editar-secretaria', compact('secreta'));
    }

    public function salvarEdicao(Request $request){
        $dados = $request->all();
        unset($dados['_token']);
        Secretaria::where('id', $dados['id'])->update($dados);
        return redirect()->route('lista-secretaria');
    }

    public function excluirSecretaria($id){
        try {
            Secretaria::where('id', $id)->delete();
            flash('Secretaria excluida com sucesso!')->success();
        } catch (\Exception $e) {
            flash('Erro ao excluir secretaria. Está possuí galeria de fotos.')->warning();
        }
        return back();

    }
}
