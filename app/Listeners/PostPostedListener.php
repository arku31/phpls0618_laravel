<?php

namespace App\Listeners;

use App\Events\PostPostedEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class PostPostedListener implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Handle the event.
     *
     * @param  PostPostedEvent  $event
     * @return void
     */
    public function handle(PostPostedEvent $event)
    {
        sleep(5);
    }
}
