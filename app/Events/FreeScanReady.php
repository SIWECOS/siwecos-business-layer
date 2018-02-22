<?php

namespace App\Events;

use App\Scan;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Support\Collection;

class FreeScanReady implements ShouldBroadcast {
	use Dispatchable, InteractsWithSockets, SerializesModels;


	public $id;

	/**
	 * Create a new event instance.
	 *
	 * @param int $id
	 */
	public function __construct( int $id ) {
		$this->id = $id;
	}

	/**
	 * Get the channels the event should broadcast on.
	 *
	 * @return \Illuminate\Broadcasting\Channel|array
	 */
	public function broadcastOn() {
		return new Channel( 'freescan-ready.' . $this->id );
	}

	public function broadcastAs() {
		return 'freescan.ready';
	}
}
