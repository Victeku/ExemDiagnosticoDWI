<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Softdeletes;

class usuarios extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $primaryKey ='id_usu';
    protected $fillable = ['id_usu', 'nombre','app','apm','correo','password','id_tipousu'];
}
