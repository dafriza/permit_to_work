<?php

namespace App\Providers;

use App\Events\PermitToWorkEvent;
use Illuminate\Support\Facades\Event;
use App\Events\SendApproverAssignment;
use App\Events\SendApproverPTWRequest;
use Illuminate\Auth\Events\Registered;
use App\Events\SendEmployeePTWDoneEvent;
use App\Events\SendApproverFirstAssignment;
use App\Listeners\SendEmployeePTWDoneNotification;
use App\Notifications\EmployeePTWDoneNotification;
use App\Listeners\SendPermitToWorkToApproverNotification;
use App\Listeners\SendPermitToWorkFirstApproverNotification;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use App\Listeners\SendPermitToWorkApproverAssignmentNotification;
use App\Notifications\PermitToWorkApproverAssignmentNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        SendApproverAssignment::class => [
            SendPermitToWorkApproverAssignmentNotification::class,
        ],
        SendApproverFirstAssignment::class => [
            SendPermitToWorkFirstApproverNotification::class
        ],
        SendApproverPTWRequest::class => [
            SendPermitToWorkToApproverNotification::class
        ],
        SendEmployeePTWDoneEvent::class => [
            // EmployeePTWDoneNotification::class
            SendEmployeePTWDoneNotification::class
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     *
     * @return bool
     */
    public function shouldDiscoverEvents()
    {
        return false;
    }
}
