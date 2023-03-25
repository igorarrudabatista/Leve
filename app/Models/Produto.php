<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
    protected $table = 'Produtos';

    protected $fillable = [
        'Nome_Produto',
        'Categoria_Produto',
        'Status_Produto',
        'Preco_Produto',
        'Estoque_Produto',
        'Quantidade_Produto',
        'image',
    ];
   // protected $guarded = [];
    
    //  public function orcamento(){
    //     return $this->hasmany(Orcamento::class);
    // }

    public function recibo()
    {
        return $this->belongsToMany(Recibo::class);
    }
}