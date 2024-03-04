<?php

namespace App\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class SendApproverPTWRequest extends PermitToWorkEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $receiver, $sender, $permitToWork;
    public function __construct($receiver, $sender, $permitToWork)
    {
        $this->receiver = $receiver;
        $this->sender = $sender;
        $this->permitToWork = $permitToWork;
        parent::__construct($receiver, $sender, $permitToWork);
    }
}
