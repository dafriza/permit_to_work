<?php

namespace App\Notifications;

use App\Models\User;
use App\Models\PermitToWork;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class PermitToWorkApproverNotification extends Notification
{
    use Queueable;
    private $receiver, $sender, $permitToWork;
    public function __construct(User $receiver, User $sender, PermitToWork $permitToWork)
    {
        $this->receiver = $receiver;
        $this->sender = $sender;
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
            'message' => 'New Permit To Work Request '. Auth::user()->full_name,
            'link' => route('permit_to_work.management.detail_request', ['id' => $this->permitToWork]),
        ];
    }
}
