<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagem extends Model
{
    use HasFactory;
    protected $table = "imagem";
    protected $fillable = [
        'img_grande',
        'img_thumb',
        'alt',
        'escrita'
    ];

    public function categorias(){
        return $this->belongsTo('App\Models\Categoria');
    }

    public function classes(){
        return $this->belongsToMany('App\Models\Classe', 'imagem_classe');
    }
}
