<?php

namespace App\Providers;

use App\Http\Resources\Api\OrderResource;
use Illuminate\Support\ServiceProvider;
use App\Http\View\Composers\LayoutComposer;
use App\Observers\OrderObserver;
use App\Observers\UserObserver;
use App\Order;
use App\User;
use Illuminate\Bus\Dispatcher;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Dispatcher $events)
    {
        // Observers
        // Order::observe(OrderObserver::class);
        // User::observe(UserObserver::class);

        OrderResource::withoutWrapping();

        // Globaly passing Data to project
        View::composer('layouts.web', LayoutComposer::class);

    }
}
