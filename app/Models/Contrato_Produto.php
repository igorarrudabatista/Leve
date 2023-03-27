<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrato_Produto extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function contrato(){
        return $this->belongsTo(Contrato::class);
    }
    public function produto(){
        return $this->belongsTo(Produto::class);
    }
}
