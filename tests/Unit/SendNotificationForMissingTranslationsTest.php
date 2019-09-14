<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Str;
use Illuminate\Notifications\AnonymousNotifiable;
use App\Notifications\MissingTranslationFoundNotification;

class SendNotificationForMissingTranslationsTest extends TestCase
{
    /** @test */
    public function when_a_translation_key_is_missing_a_mail_will_be_sent_and_the_warning_will_be_logged()
    {
        __('SOME_MISSING_KEY_FOR_TRANSLATION');

        Log::channel('lost-in-translation')->assertLogged('warning', function ($message, $context) {
            return Str::contains($message, "Missing translation: SOME_MISSING_KEY_FOR_TRANSLATION");
        });

        Notification::assertSentTo(new AnonymousNotifiable, MissingTranslationFoundNotification::class);
    }

    /** @test */
    public function when_a_translation_key_is_missing_a_mail_will_be_sent_only_once()
    {
        __('SOME_MISSING_KEY_FOR_TRANSLATION');
        __('SOME_MISSING_KEY_FOR_TRANSLATION');

        Notification::assertSentToTimes(new AnonymousNotifiable, MissingTranslationFoundNotification::class, 1);
    }

    /** @test */
    public function missing_validation_strings_will_not_be_sent_via_mail()
    {
        __('validation.required');

        Notification::assertNothingSent();
    }
}
