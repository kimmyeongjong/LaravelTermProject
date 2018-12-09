<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Sse\Event;
use Sse\SSE;


class TempEvent
{
    require_once('/path/to/vendor/autoload.php');
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct()
    {
        public function update(){
			//Here's the place to send data
			return 'Hello, world!';
		}

		public function check(){
			//Here's the place to check when the data needs update
			return true;
		}
    }

    $sse = new SSE(); //create a libSSE instance
	$sse->addEventListener('event_name', new YourEventHandler());//register your event handler
	$sse->start();//start the event loop

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
