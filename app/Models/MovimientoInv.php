<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovimientoInv extends Model
{
    use HasFactory;  
    
    protected $table = 'movimientoInv';

    protected $primaryKey = 'idMovimientoInv';


}
