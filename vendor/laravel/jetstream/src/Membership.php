<?php

namespace Laravel\Jetstream;

use Illuminate\Database\Eloquent\Relations\Pivot;

abstract class Clientship extends Pivot
{
    /**
     * The table associated with the pivot model.
     *
     * @var string
     */
    protected $table = 'team_user';
}
