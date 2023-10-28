<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desejo extends Model
{
    use HasFactory;

    protected $table = "desejo";

    protected $fillable = [
        'nome',
        'qtdItens',
        'desc',
        'dataEntrada',
        'produto_id',
    ];

    protected $casts = [
        'produto_id'=> "integer"
    ];

    public function produto(){
        return $this->belongsTo(Produto::class,
            'produto_id','id');
    }
}
