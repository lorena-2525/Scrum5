<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacunacion extends Model
{
    use HasFactory;

    protected $table = 'vacunacion';

    protected $primaryKey = 'idVacunacion';


}
