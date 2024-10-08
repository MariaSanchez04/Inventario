<?php

namespace App\Providers;
use App\Policies\ClientePolicy;
use App\Policies\CompraPolicy;
use App\Policies\ProductoPolicy;
use App\Policies\ProveedorPolicy;
use App\Policies\RolePolicy;
use App\Policies\UserPolicy;
use App\Policies\VentaPolicy;

use App\Models\Cliente;
use App\Models\Compra;
use App\Models\Producto;
use App\Models\Proveedor;
use App\Models\Role;
use App\Models\User;
use App\Models\Venta;
use Database\Factories\UserFactory;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
        Cliente::class => ClientePolicy::class,
        Producto::class => ProductoPolicy::class,
        Compra::class => CompraPolicy::class,
        Proveedor::class => ProveedorPolicy::class,
        Role::class => RolePolicy::class,
        User::class => UserPolicy::class,
        Venta::class => VentaPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
    }
}
