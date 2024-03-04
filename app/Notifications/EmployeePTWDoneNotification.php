<?php

namespace App\Notifications;

use App\Models\User;
use App\Models\PermitToWork;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class EmployeePTWDoneNotification extends Notification
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
            'message' => 'Permit To Work is Done',
            'link' => route('permit_to_work.show', ['id' => $this->permitToWork]),
        ];
    }
}
