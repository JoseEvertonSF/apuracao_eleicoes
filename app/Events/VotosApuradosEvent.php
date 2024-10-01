<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class VotosApuradosEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    /**
     * Create a new event instance.
     */

     public $atualizacoes;
     
    public function __construct($atualizacoes)
    {
        $this->atualizacoes = $atualizacoes;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {   
        dd('oi');
        return [
            new Channel('apuracao')
        ];
    }

    public function broadcastWith(): array
    {   
        return ['atualizacoes' => $this->atualizacoes];
    }
}
