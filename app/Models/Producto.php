<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'producto';

    protected $primaryKey = 'idProducto';

    public $timestamps = false;

    public function servicios()
{
    return $this->belongsToMany(Servicio::class, 'productoXservicio', 'producto_idProducto', 'servicio_idServicio');
}


}
