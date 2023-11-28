<?php

namespace App\Providers;

use App\Services\Dashboard\DashboardInterface;
use App\Services\Dashboard\DashboardServices;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;
use App\Services\PermitToWork\PermitToWorkServices;
use App\Services\PermitToWork\PermitToWorkInterface;

class AppServiceProvider extends ServiceProvider implements DeferrableProvider
{
    public $singletons = [
        PermitToWorkInterface::class => PermitToWorkServices::class,
        DashboardInterface::class => DashboardServices::class,
    ];
    public function register()
    {
    }

    public function boot()
    {
        //
    }

    function provides()
    {
        return [PermitToWorkInterface::class, DashboardInterface::class];
    }
}
