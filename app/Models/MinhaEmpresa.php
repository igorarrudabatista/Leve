<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MinhaEmpresa extends Model
{
    use HasFactory;
    protected $table = 'empresas';

    protected $guarded = [];




    public function recibo(){
        return $this->belongsTo(Recibo::class);
    }
}
