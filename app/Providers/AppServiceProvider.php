<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Dashboard\DashboardServices;
use App\Services\Dashboard\DashboardInterface;
use App\Services\UserProfile\UserProfileServices;
use App\Services\UserProfile\UserProfileInterface;
use App\Services\PermitToWork\PermitToWorkServices;
use App\Services\PermitToWork\PermitToWorkInterface;
use Illuminate\Contracts\Support\DeferrableProvider;

class AppServiceProvider extends ServiceProvider implements DeferrableProvider
{
    public $singletons = [
        PermitToWorkInterface::class => PermitToWorkServices::class,
        DashboardInterface::class => DashboardServices::class,
        UserProfileInterface::class => UserProfileServices::class,
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
        return [PermitToWorkInterface::class, DashboardInterface::class, UserProfileInterface::class];
    }
}
