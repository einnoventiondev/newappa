<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContectusMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $name;
    public $email;
    public $phone;
    public $about_us;
    public function __construct($name,$email,$phone,$about_us)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->about_us = $about_us;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $user['name'] = $this->name;
        $user['email'] = $this->email;
        $user['phone'] = $this->phone;
        $user['about_us'] = $this->about_us;

        return $this->from($user['email'], "APPA")
        ->subject('Create Password Link')
        ->view('emails.contactmail', ['user' => $user]);
    }
}
