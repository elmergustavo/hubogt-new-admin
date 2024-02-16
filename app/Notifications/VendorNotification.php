<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class VendorNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public $vendor;

    public function __construct($data)
    {
        $this->vendor = $data;
        \Log::info($data);
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('Solicitud de creación de tienda')
            ->greeting('¡Hola!')
            ->line('Han solicitado la creación de una tienda')
            ->line('Número de telefono: ' . $this->vendor['phone'])
            ->line('Nombre: ' . $this->vendor['name'])
            ->line('Correo: ' . $this->vendor['mail']);
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
