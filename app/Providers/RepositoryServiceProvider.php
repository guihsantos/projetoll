<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(\App\Repositories\UserRepository::class, \App\Repositories\UserRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\ComandaRepository::class, \App\Repositories\ComandaRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\PedidoRepository::class, \App\Repositories\PedidoRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\ProdutoRepository::class, \App\Repositories\ProdutoRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\ItemProdutoRepository::class, \App\Repositories\ItemProdutoRepositoryEloquent::class);
        //:end-bindings:
    }
}
