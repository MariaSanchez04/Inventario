<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'correo', 'telefono'];

    public function productos()
    {
        return $this->belongsToMany(Producto::class, 'compras');
    }

    public function compras()
    {
        return $this->hasMany(Compra::class);
    }
}
