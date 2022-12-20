<?php

namespace App\Notifications\User;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class UserCreateSuccess extends Notification
{
    use Queueable;

    private $email;
    private $password;

    /**
     * Create a new notification instance.
     *
     * @param string $password
     * @param string $email
     */
    public function __construct(string $password, string $email)
    {
        $this->password = $password;
        $this->email = $email;
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
     * @return MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line('Account created.')
            ->line('You register data:')
            ->line('Email: ' . $this->email)
            ->line('Password: ' . $this->password)
            ->line('Program link: ' . url('/'));
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
