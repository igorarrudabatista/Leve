<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orcamento_Produto extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function orcamento(){
        return $this->belongsTo(Orcamento::class);
    }
    public function produto(){
        return $this->belongsTo(Produto::class);
    }
}
