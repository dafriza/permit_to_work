<?php

namespace App\Listeners;

use App\Events\PermitToWorkEvent;
use App\Events\SendEmployeePTWDoneEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Notification;
use App\Notifications\EmployeePTWDoneNotification;

class SendEmployeePTWDoneNotification
{
    public function handle(SendEmployeePTWDoneEvent $event)
    {
        Notification::send($event->receiver, new EmployeePTWDoneNotification($event->receiver, $event->sender, $event->permitToWork));
    }
}
