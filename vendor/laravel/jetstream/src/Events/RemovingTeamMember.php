<?php

namespace Laravel\Jetstream\Events;

use Illuminate\Foundation\Events\Dispatchable;

class RemovingTeamClient
{
    use Dispatchable;

    /**
     * The team instance.
     *
     * @var mixed
     */
    public $team;

    /**
     * The team member being removed.
     *
     * @var mixed
     */
    public $user;

    /**
     * Create a new event instance.
     *
     * @param  mixed  $team
     * @param  mixed  $user
     * @return void
     */
    public function __construct($team, $user)
    {
        $this->team = $team;
        $this->user = $user;
    }
}
