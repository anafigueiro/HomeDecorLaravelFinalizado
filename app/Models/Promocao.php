<?php

namespace App\Models;

use App\Models\Produto;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promocao extends Model
{
    use HasFactory;

    protected $table = "promocao";

    protected $fillable = [
        'produto_id',
        'descricao',
        'novo_valor',
        'imagem',
    ];

    protected $cast = [
        'produto_id' =>'integer',
    ];

    public function produto(){
        return $this->belongsTo(Produto::class,
            'produto_id','id');
    }
}
