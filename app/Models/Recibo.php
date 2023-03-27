<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recibo extends Model
{

    use HasFactory;
    protected $casts = [
        'DescProdutos' => 'array'
    ];
    protected $fillable = [
        'empresa_cliente_id', 'DescProdutos', 'DataEntrega', 'DataRetirada', 'Descrição', 'MensagemCliente',
        'Observacoes'
    ];
    protected $table = 'Recibo';
    public $timestamps = false;


    public function produto() {
        return $this->belongsToMany(Produto::class)->withPivot(['Quantidade']);
    }   
    
  public function empresa_cliente() {
      return $this->belongsTo(Empresa_cliente::class, 'empresa_cliente_id');
      }      

    

}
