<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticatable
{
    use Notifiable;

    protected $table = 'usuario';
    protected $primaryKey = 'idUsuario';

    protected $fillable = [
        'username',  // Suponiendo que este es el nombre de usuario
        'password',
    ];

    // Relación con la tabla 'persona'
    public function persona()
    {
        return $this->belongsTo(Persona::class, 'persona_idPersona', 'idPersona');
    }

    // Mapear el identificador de autenticación a la columna 'username'
    public function getAuthIdentifierName()
    {
        return 'username';
    }

    // Método para obtener el correo electrónico desde la tabla 'persona'
    public function getEmailAttribute()
    {
        return $this->persona->correoPersona; // Esto asume que tienes una columna 'email' en la tabla 'persona'
    }
}
