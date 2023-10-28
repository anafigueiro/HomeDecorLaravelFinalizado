<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ouvidoria extends Model
{
    use HasFactory;

    protected $table = "ouvidoria";

    protected $fillable = [
        'sugestao',
        'observacao',
        'dataRegistro',
        'contato_id'
    ];

    protected $casts = [
        'contato_id'=> "integer"
    ];

    public function contato(){
        return $this->belongsTo(Contato::class,
            'contato_id','id');
    }
}
