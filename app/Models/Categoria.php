<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $table = "categoria";
    protected $fillable = [
        'nome',
        'galeria_id'
    ];

    public function galerias(){
        return $this->belongsTo('App\Models\Galeria');
    }

    public function imagens(){
        return $this->hasMany('App\Models\Imagem');
    }
}
