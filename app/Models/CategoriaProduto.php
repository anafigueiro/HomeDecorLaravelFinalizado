<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaProduto extends Model
{
    use HasFactory;

    protected $table = "categoria_produto";

    protected $fillable = ['nome', 'tipo', 'produto_id'];

    protected $casts = [
        'produto_id'=> "integer"
    ];

    public function produto(){
        return $this->belongsTo(Produto::class,
            'produto_id','id');
    }
}
