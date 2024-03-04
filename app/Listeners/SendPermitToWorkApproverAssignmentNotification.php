<?php

namespace App\Listeners;

use App\Models\User;
use App\Events\PermitToWorkEvent;
use App\Events\SendApproverAssignment;
use App\Notifications\PermitToWorkApproverAssignmentNotification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Notification;

class SendPermitToWorkApproverAssignmentNotification
{
    public function handle(SendApproverAssignment $event)
    {
        $roleAssignment = $event->sender->role_assignment;
        $roleAssignmentName = $event->sender->role_assignment_name;
        Notification::send($event->receiver, new PermitToWorkApproverAssignmentNotification($event->receiver, $event->sender,$roleAssignmentName, $event->permitToWork->{$roleAssignment}->status, $event->permitToWork));
    }
}
