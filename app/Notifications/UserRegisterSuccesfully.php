<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use App\User;

class UserRegisterSuccesfully extends Notification
{
    use Queueable;

    /**
     * 
     * Utilisateur @var
     */
    /**
     * Create a new notification instance.
     *
     * @return void
     * @param User $user
     * 
     * 
     */

     protected $user;

    public function __construct()
    {
        $this -> user = $user;
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
        $user = $this -> user;

        return (new MailMessage)
                    ->from('contact@youtikcredit.com' )
                    ->subject('Succesfully created new account')
                    ->geeting(sprintf('Hello %s', $user->name))
                    ->line('You have succesfully registered to our system. Please activate your account.')
                    ->action('Click here', route('activate.user', $user->activation_code))
                    ->line('Thank you for using our application!');
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
