<?php

namespace App\Notifications;

use App\Models\User;
use App\Models\PermitToWork;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;

class PermitToWorkApproverAssignmentNotification extends Notification
{
    use Queueable;
    private $receiver, $sender, $roleAssignment, $status, $permitToWork;
    public function __construct(User $receiver, User $sender, string $roleAssignment, string $status, PermitToWork $permitToWork)
    {
        $this->receiver = $receiver;
        $this->sender = $sender;
        $this->roleAssignment = $roleAssignment;
        $this->status = $status;
        $this->permitToWork = $permitToWork;
    }
    public function via($notifiable)
    {
        return ['database'];
    }
    public function toArray($notifiable)
    {
        return [
            'sender' => $this->sender,
            // 'message' => 'Permit to work request, ' . ucfirst(str_replace('_', ' ', $this->roleAssignment)) . ' status is ' . $this->status,
            'message' => 'Permit to work request, ' . ucfirst(str_replace('_', ' ', $this->roleAssignment)) . ' status is ' . $this->status,
            'link' => route('permit_to_work.management.detail_request', ['id' => $this->permitToWork->id]),
        ];
    }
}
