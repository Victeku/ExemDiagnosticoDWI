<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Softdeletes;

class tipousuarios extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $primaryKey ='id_tipousu';
    protected $fillable = ['id_tipousu', 'nombre'];
}
