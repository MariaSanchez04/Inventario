<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'estado', 'stock', 'price', 'id_proveedor'];

    public function Proveedores(){
        return $this->belongsTo(Proveedor::class,'id_proveedor');
    }

    public function compras()
    {
        return $this->hasMany(Compra::class);
    }

}
