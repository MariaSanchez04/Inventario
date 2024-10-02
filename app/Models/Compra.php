<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;

    protected $fillable = ['stock', 'id_producto', 'id_proveedor'];

    public function Producto()
    {
        return $this->belongsTo(Producto::class, 'id_producto');
    }

    public function Proveedor()
    {
        return $this->belongsTo(Proveedor::class, 'id_proveedor');
    }

    protected static function booted()
    {
        static::created(function ($compra) {
            $producto=Producto::find($compra->id_producto);
            if($producto){
                $producto->stock += $compra->stock;
                $producto->save();
            }
    });
    }
}
