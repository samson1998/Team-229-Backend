<?php

namespace App\Providers;

use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\ServiceProvider;

class BroadcastServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $cast = new Broadcast();
        $cast::routes();

        // require base_path('routes/channels.php');
        base_path('routes/channels.php');
    }
}
