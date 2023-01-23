<?php

namespace App\Listeners;

use App\Events\FaultCreated;
use App\Models\User;
use App\Notifications\NewFault;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendFaultCreatedNotifications implements ShouldQueue
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
     * @param  \App\Events\FaultCreated  $event
     * @return void
     */
    public function handle(FaultCreated $event)
    {
        foreach (User::whereNot('id', $event->fault->user_id)->cursor() as $user) {
            $user->notify(new NewFault($event->fault));
        }
    }
}
