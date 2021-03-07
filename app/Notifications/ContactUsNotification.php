<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\HtmlString;

class ContactUsNotification extends Notification
{
    use Queueable;

    protected $contact_us;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($contact_us)
    {
        $this->contact_us = $contact_us;
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
                    ->subject('Contact Us - '.config('app.name'))
                    ->greeting('Hello!')
                    ->line('The email is to inform you that new contact us request in '.config('app.name').'.')
                    ->line('Contact detail is as below.')
                    ->line(
                        new HtmlString(
                            '<b>Name:</b> '.$this->contact_us->name.'<br/>'.
                            '<b>Phone:</b> '.$this->contact_us->phone.'<br/>'.
                            '<b>Email:</b> '.$this->contact_us->email.'<br/>'.
                            '<b>Message:</b> '.$this->contact_us->message
                        )
                    )
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
