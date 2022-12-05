<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\HtmlString;

class ContactFormNotification extends Notification
{
    use Queueable;

    private $contactFormData;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($contactFormData)
    {
        $this->contactFormData = $contactFormData;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param mixed $notifiable
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
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Contact Form')
            ->greeting(new HtmlString("<p style='text-align: center; font-size: 18px; font-weight: bold'>Formular de Contact</p>"))
            ->line('Nume: ' .$this->contactFormData['last_name'])
            ->line('Prenume: ' .$this->contactFormData['first_name'])
            ->line('Email: ' .$this->contactFormData['email'])
            ->line('Telefon: ' .$this->contactFormData['phone'])
            ->line('Mesaj: ' .$this->contactFormData['message'])
            ->action($this->contactFormData['actionButton'], $this->contactFormData['url'])
            ->salutation("\r\n\r\n Beste Grüße,  \r\n Ihr MDevelop-Team");

    }

    /**
     * Get the array representation of the notification.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
