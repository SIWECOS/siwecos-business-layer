<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class forgotpasswordmail extends Notification
{
    use Queueable;

    public $token;

    /**
     * Get the notification's delivery channels.
     *
     * @param mixed $notifiable
     *
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param mixed $notifiable
     *
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage())
            ->markdown('mail.forgotpassword', [
                'reseturl'      => config('siwecos.password_reset_uri') . $notifiable->passwordreset_token,
                'email'         => $notifiable->email
            ])
            ->subject('[SIWECOS] Passwort zurücksetzen');
    }
}
