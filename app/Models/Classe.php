<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;
    protected $table = "classe";
    protected $fillable = [
        'nome',
        'descricao'
    ];

    public function imagens(){
        return $this->belongsToMany('App\Models\Imagem', 'imagem_classe');
    }
}
