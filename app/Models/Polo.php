<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
  
class Polo extends Model
{
    use HasFactory;
  
    /**
     * The attributes that are mass assignable.
     *  
     * @var array
     */

protected $table = 'polo';

    protected $fillable = [
        'PoloNome', 'PoloSts'
    ];
    // public function users()
    // {
    //     return $this->belongsToMany(User::class);
    // }
}