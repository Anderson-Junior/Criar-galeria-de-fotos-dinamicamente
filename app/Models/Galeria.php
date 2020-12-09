<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeria extends Model
{
    use HasFactory;

    protected $table = "galeria";
    protected $fillable = [
        'nome',
        'secretaria_id'
    ];

    public function categorias(){
        return $this->hasMany('App\Models\Categoria');
    }

    public function secretaria(){
        return $this->belongsTo('App\Models\Secretaria');
    }
}
