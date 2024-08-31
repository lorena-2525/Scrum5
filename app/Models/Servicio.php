<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;

    protected $table = 'servicio';

    protected $primaryKey = 'idServicio';

    public $timestamps = false;


    public function productos()
    {
        return $this->belongsToMany(Producto::class, 'productoXservicio', 'servicio_idServicio', 'producto_idProducto');
    }
    

}

