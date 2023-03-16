<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orcamento extends Model
{
    use HasFactory;

  //   protected $casts = [
  //     'produto_id' => 'array',
  //     'Quantidade' => 'array',
  // ];
  //protected $guarded = ['*'];


    protected $fillable = [
      'Numero_Orcamento',
      'Data',
      'Validade',
      'Garantia',
      'Forma_Pagamento',
      'Descricao',
      'Desconto',
      'Taxas',
      'empresa_id',
      'empresa_cliente_id',
  ];
  

    public function empresa() {
        return $this->belongsTo(Empresa::class);
      }
  
  
    public function empresa_cliente() {
      return $this->belongsTo(Empresa_cliente::class);
      }      
  
  public function produto() {
      return $this->belongsToMany(Produto::class)->withPivot(['Quantidade']);
  }   
  
  
  // public function orcamento_proximidade(){
  //     return $this->belongsTo(orcamento_proximidade::class)->withTimestamps();
  
  //     }

}
