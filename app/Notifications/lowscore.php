<?php

namespace App\Notifications;

use App\Http\Controllers\SiwecosScanController;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class lowscore extends Notification
{
    use Queueable;

    public $pdfAttachement;
    public $domain;

    /**
     * Create a new notification instance.
     *
     * @param int $scanId
     */
    public function __construct(int $scanId)
    {
        //
        $scanController = new SiwecosScanController();
        $this->pdfAttachement = $scanController->generatePdf($scanId);
        $this->domain = $scanController->getDomainName($scanId);
    }

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
        $domainArray = parse_url($this->domain);

        return (new MailMessage())
            ->markdown('mail.lowscore', [
                'email'         => $notifiable->email,
                'first_name'    => $notifiable->first_name,
                'last_name'     => $notifiable->last_name,
                'salutation_id' => $notifiable->salutation_id,
            ])
            ->attachData($this->pdfAttachement, 'SCAN '.$domainArray['scheme'].' '.$domainArray['host'].' '.Carbon::now()->format('Y-m-d').'.pdf')
            ->subject('[SIWECOS] '.$this->domain.' Sicherheitsreport');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param mixed $notifiable
     *
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
