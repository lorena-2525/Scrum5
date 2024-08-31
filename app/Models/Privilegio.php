<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Privilegio extends Model
{
    use HasFactory;  
    
    protected $table = 'privilegio';

    protected $primaryKey = 'idPrivilegio';

    public function roles()
    {
        return $this->belongsToMany(Rol::class, 'rolXprivilegio', 'privilegio_idPrivilegio', 'rol_idRol');
    }


}
