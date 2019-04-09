<?php

namespace App\Listeners;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use LostInTranslation\Events\MissingTranslationFound;
use App\Notifications\MissingTranslationFoundNotification;

class NotifyForMissingTranslations
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
    public function handle(MissingTranslationFound $event)
    {
        \Notification::route('mail', 'technik@siwecos.de')
            ->notify(new MissingTranslationFoundNotification($event));
    }
}
