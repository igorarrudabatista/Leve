<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Wildside\Userstamps\Userstamps;
class Agenda extends Model
{

    use SoftDeletes;
    use HasFactory;
    use Userstamps;

    const CREATED_BY = 'created_by';
    const UPDATED_BY = 'updated_by';
    const DELETED_BY = 'deleted_by';



    use HasFactory;
    protected $table = 'agenda'; 

    protected $fillable = ['title', 'start_date', 'end_date', 'criado_por'];


                
}
