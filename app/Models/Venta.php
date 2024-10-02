<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;

    protected $fillable = ['stock', 'id_producto', 'id_cliente'];

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'id_producto');
    }

    public function Cliente()
    {
        return $this->belongsTo(Cliente::class, 'id_cliente');
    }

    protected static function booted()
    {
        static::created(function ($compra) {
            $producto=Producto::find($compra->id_producto);
            if($producto){
                $producto->stock -= $compra->stock;
                $producto->save();
            }
    });
    }
}
