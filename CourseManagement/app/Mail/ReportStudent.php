<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReportStudent extends Mailable
{
    use Queueable, SerializesModels;

    public $student;
    public $module;
    public $date;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($student,$module,$date)
    {
        $this->student = $student;
        $this->module = $module;
        $this->date = $date;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('email.reportstudent')
        ->subject('Absent Report');
    }
}
