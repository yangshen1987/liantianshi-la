<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 19/2/25
 * Time: 下午5:08
 */

namespace App\Events;


use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class TalkSend implements ShouldBroadcast
{
    
    public $msgObj;
    
    
    public function broadcastOn()
    {
        return new PrivateChannel('message'. $this->msgObj->room_id);
        // TODO: Implement broadcastOn() method.
    }
}