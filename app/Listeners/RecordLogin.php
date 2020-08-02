<?php

namespace App\Listeners;

use App\Login;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class RecordLogin
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        if($event->user->tenant_id) {
            Login::create([
                'user_id' => $event->user->id,
                'tenant_id' => $event->user->tenant_id,
            ]);
        }
    }
}
