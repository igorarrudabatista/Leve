<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
  
class Ministerio extends Model
{
    use HasFactory;
  
    /**
     * The attributes that are mass assignable.
     *  
     * @var array
     */

protected $table = 'ministerio';

    protected $fillable = [
        'MinisterioNome', 'MinisterioStatus', 'MinisterioEmail', 
        'MinisterioDDD', 'MinisterioFone', 'MinisterioEndereco', 
        'MinisterioEndBairroId', 'MinisterioEndNmr', 
        'MinisterioCidade', 'MinisterioEstado'
    ];
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}