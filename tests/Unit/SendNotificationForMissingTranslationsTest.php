<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Notification;
use TiMacDonald\Log\LogFake;
use Illuminate\Support\Str;
use Illuminate\Notifications\AnonymousNotifiable;
use App\Notifications\MissingTranslationFoundNotification;

class SendNotificationForMissingTranslationsTest extends TestCase
{
    /** @test */
    public function when_a_translation_key_is_missing_a_mail_will_be_sent()
    {
        Log::swap(new LogFake);

        __('SOME_MISSING_KEY_FOR_TRANSLATION');

        Log::channel('lost-in-translation')->assertLogged('warning', function ($message, $context) {
            return Str::contains($message, "Missing translation: SOME_MISSING_KEY_FOR_TRANSLATION");
        });

        Notification::assertSentTo(new AnonymousNotifiable, MissingTranslationFoundNotification::class);
    }
}
