<?php

namespace App\Listeners;

use App\Events\BehavioralEvents;
use App\Modules\Common\Library\Hook;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Response;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class BehavioralListener
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
     * @param  BehavioralEvents $event
     * @return void
     */
    public function handle(BehavioralEvents $event)
    {
        Hook::import(config('tags'));
//        Hook::listen('app_end', $event);
        register_shutdown_function(function () use ($event) {
            // 监听 app_end
            Hook::listen('app_end', $event);
        });

    }
}
