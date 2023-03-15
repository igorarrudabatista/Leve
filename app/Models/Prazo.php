<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
  
class Prazo extends Model
{
    use HasFactory;
  
    /**
     * The attributes that are mass assignable.
     *  
     * @var array
     */

protected $table = 'prazo';

    protected $fillable = [
        'ParmPerfilAcessoNivel', 'ParmPrazoDias' 
      
    ];
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}