<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class TeacherContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $det;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($det)
    {
        $this->det=$det;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        Log::info('Mailable build method called with data:', $this->det);
        return $this->subject('Teacher Message')->view('emails.TeacherContactMail');
    }
}
