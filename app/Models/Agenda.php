<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;

    protected $table = 'agenda';
    protected $primaryKey = 'idAgenda';
    public $timestamps = false;

    
    protected $fillable = [
        'fechaAgenda', 
        'horaAgenda', 
        'usuario_idUsuario', 
        'estadoAgenda_idEstadoAgenda', 
        'mascota_idMascota', 
        'valorServicio_idValorServicio'];
        
    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuario_idUsuario');
    }

    public function estadoAgenda()
    {
        return $this->belongsTo(EstadoAgenda::class, 'estadoAgenda_idEstadoAgenda');
    }

    public function mascota()
    {
        return $this->belongsTo(Mascota::class, 'mascota_idMascota');
    }

    public function valorServicio()
    {
        return $this->belongsTo(ValorServicio::class, 'valorServicio_idValorServicio');
    }
}