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
}
