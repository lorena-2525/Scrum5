<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;

    protected $table = 'rol';

    protected $primaryKey = 'idRol';

    public function privilegios()
    {
        return $this->belongsToMany(Privilegio::class, 'rolXprivilegio', 'rol_idRol', 'privilegio_idPrivilegio');
    }


}
