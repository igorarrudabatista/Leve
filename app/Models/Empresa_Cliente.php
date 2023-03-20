<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa_Cliente extends Model
{



    use HasFactory;
    
    protected $guarded = [];
    
    public function orcamento(){
        return $this->belongsTo(Orcamento::class);
        
    }

    public function Recibo() {
        return $this->belongsTo(Recibo::class, 'empresa_cliente_id');
        }   
}
