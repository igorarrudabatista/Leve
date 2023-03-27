<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MinhaEmpresa extends Model
{
    use HasFactory;
    protected $table = 'empresas';

    protected $fillable = [
        'Nome_Empresa', 'Cnpj', 'Email', 'Telefone', 'Site', 'image', 'facebook_url', 'instagram_url', 'linkedin_url'
    ];



    public function recibo(){
        return $this->belongsTo(Recibo::class);
    }
}
