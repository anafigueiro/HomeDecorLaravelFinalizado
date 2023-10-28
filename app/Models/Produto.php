<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $table = "produto";

    protected $fillable = [
        'nome',
        'descricao',
        'valor',
        'imagem',
        'categoria_produto_id',
    ];

    public function categoria(){
        return $this->belongsTo(CategoriaProduto::class,
            'categoria_produto_id','id');
    }
}
