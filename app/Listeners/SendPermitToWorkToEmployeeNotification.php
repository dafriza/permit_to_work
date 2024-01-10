<?php

namespace App\Listeners;

use App\Models\User;
use App\Events\PermitToWorkEvent;
use Illuminate\Support\Facades\Auth;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Notification;
use App\Notifications\PermitToWorkEmployeeNotification;

class SendPermitToWorkToEmployeeNotification
{
    public function handle(PermitToWorkEvent $event)
    {
        $roleAssignment = $event->sender->role_assignment;
        $roleAssignmentName = $event->sender->role_assignment_name;
        Notification::send($event->receiver, new PermitToWorkEmployeeNotification($event->receiver, $event->sender,$roleAssignmentName, $event->permitToWork->{$roleAssignment}->status));
    }
}
