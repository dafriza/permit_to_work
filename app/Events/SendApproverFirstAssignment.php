<?php

namespace App\Events;

use App\Models\User;
use App\Models\PermitToWork;
use App\Events\PermitToWorkEvent;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class SendApproverFirstAssignment extends PermitToWorkEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $receiver, $sender, $permitToWork;
    public function __construct(User $receiver, User $sender, PermitToWork $permitToWork)
    {
        parent::__construct($receiver, $sender, $permitToWork);
        $this->receiver = $receiver;
        $this->sender = $sender;
        $this->permitToWork = $permitToWork;
    }
}
