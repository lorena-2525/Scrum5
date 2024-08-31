<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = 'persona';
    protected $primaryKey = 'idPersona';

    protected $fillable = [
        'correoPersona',
        'primerNombrePersona',
        'primerApellidoPersona',
        
        // Otros campos relevantes
    ];

    // Relación con la tabla 'usuario'
    public function usuario()
    {
        return $this->hasOne(Usuario::class, 'persona_idPersona', 'idPersona');
    }
}
