<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $fillable = [
        'cliente',
        'produto_id',
        'quantidade',
        'data',
    ];

    // Se você quiser estabelecer um relacionamento com o modelo Produto
    public function produto()
    {
        return $this->belongsTo(Produto::class);
    }
}
