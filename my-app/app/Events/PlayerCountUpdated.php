<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class PlayerCountUpdated implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $playerName;

    //データとして送る内容
    public function __construct($playerNameN)
    {
        $this->playerName;
    }

    //送信先
    public function broadcastOn()
    {
        return new Channel('room');//全体ならchannel個別ならPrivateChannel
    }

    //イベント名
    public function broadcastAs()
    {
        return 'player.joined';
    }
}
