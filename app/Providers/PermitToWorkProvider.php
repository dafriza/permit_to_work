<?php

namespace App\Providers;

use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;
use App\Services\PermitToWork\PermitToWorkServices;
use App\Services\PermitToWork\PermitToWorkInterface;

class PermitToWorkProvider extends ServiceProvider implements DeferrableProvider
{
    public $singletons = [
        PermitToWorkInterface::class => PermitToWorkServices::class,
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
        return [PermitToWorkInterface::class];
    }
}
