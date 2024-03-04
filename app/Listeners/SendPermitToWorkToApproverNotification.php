<?php

namespace App\Listeners;

use App\Events\PermitToWorkEvent;
use App\Events\SendApproverPTWRequest;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Notification;
use App\Notifications\PermitToWorkApproverNotification;

class SendPermitToWorkToApproverNotification
{
    public function handle(SendApproverPTWRequest $event)
    {
        Notification::send($event->receiver, new PermitToWorkApproverNotification($event->receiver, $event->sender, $event->permitToWork));
    }
}
