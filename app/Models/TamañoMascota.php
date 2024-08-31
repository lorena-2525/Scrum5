<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TamañoMascota extends Model
{
    use HasFactory;

    protected $table = 'tamañoMascota';

    protected $primaryKey = 'idTamañoMascota';


}
