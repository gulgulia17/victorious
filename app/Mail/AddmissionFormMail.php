<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class AddmissionFormMail extends Mailable
{
    use Queueable, SerializesModels;
    public $admissionData;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($admissionData)
    {
        $this->admissionData=$admissionData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.addmisionMail');
    }
}
