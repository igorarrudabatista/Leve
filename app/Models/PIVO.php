<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PIVO extends Model
{
    protected $guarded = [];


    public function categoria(){
        return $this->belongsTo(CATEGORIA::class);
    }

    public function escola(){
        return $this->belongsTo(ESCOLA::class);
    }
    public function aluno(){
        return $this->belongsTo(ALUNO::class);
    }

    }
