<?php

namespace App\Notifications;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;

class PermitToWorkEmployeeNotification extends Notification
{
    use Queueable;
    public $receiver, $sender, $roleAssignment, $status;
    public function __construct(User $receiver, User $sender, string $roleAssignment, string $status)
    {
        $this->receiver = $receiver;
        $this->sender = $sender;
        $this->roleAssignment = $roleAssignment;
        $this->status = $status;
    }
    public function via($notifiable)
    {
        return ['database'];
    }
    public function toArray($notifiable)
    {
        return [
            'sender' => $this->sender,
            'message' => 'Permit to work request, ' . ucfirst(str_replace('_', ' ', $this->roleAssignment)) . ' status is ' . $this->status,
            'link' => route('permit_to_work.detail_request', ['id' => $this->receiver]),
        ];
    }
}
