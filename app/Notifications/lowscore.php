<?php

namespace App\Notifications;

use App\Http\Controllers\SiwecosScanController;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class lowscore extends Notification
{
    use Queueable;

    public $pdfAttachement;

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
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
	        ->markdown('mail.lowscore', [
		        'email' => $notifiable->email,
		        'first_name' => $notifiable->first_name,
		        'last_name' => $notifiable->last_name,
		        'salutation_id' => $notifiable->salutation_id,
	        ])
	        ->attachData($this->pdfAttachement, 'scanreport.pdf')
	        ->subject('[SIWECOS] SCORE unter 50%');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
