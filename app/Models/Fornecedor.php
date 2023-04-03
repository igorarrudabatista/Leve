<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{



    use HasFactory;
    
    protected $guarded = [];

    protected $table = 'fornecedor';

    public function orcamento(){
        return $this->belongsTo(Orcamento::class);
        
    }

    public function Recibo() {
        return $this->belongsTo(Recibo::class, 'empresa_cliente_id');
        }   
}
