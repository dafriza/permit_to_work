<?php

namespace App\Events;

use App\Models\PermitToWork;
use App\Models\User;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class PermitToWorkEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $receiver, $sender, $permitToWork;
    public function __construct(User $receiver, User $sender, PermitToWork $permitToWork)
    {
        $this->receiver = $receiver;
        $this->sender = $sender;
        $this->permitToWork = $permitToWork;
    }
    // public function broadcastOn()
    // {
    //     return new PrivateChannel('channel-name');
    // }
}
