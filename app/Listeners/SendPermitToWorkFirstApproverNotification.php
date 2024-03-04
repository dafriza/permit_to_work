<?php

namespace App\Listeners;

use App\Events\SendApproverFirstAssignment;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Notification;
use App\Notifications\PermitToWorkApproverAssignmentNotification;

class SendPermitToWorkFirstApproverNotification
{
    public function handle(SendApproverFirstAssignment $event)
    {
        Notification::send($event->receiver, new PermitToWorkApproverAssignmentNotification($event->receiver, $event->sender, 'authorisation', 'draft', $event->permitToWork));
    }
}
