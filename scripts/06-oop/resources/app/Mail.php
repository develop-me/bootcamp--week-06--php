<?php

namespace App;

class Mail
{
    private $to;
    private $from;
    private $subject;
    private $message;

    public function to($to)
    {
        $this->to = $to;
    }

    public function from($from)
    {
        $this->from = $from;
    }

    public function subject($subject)
    {
        $this->subject = $subject;
    }

    public function message($message)
    {
        $this->message = $message;
    }

    public function mail()
    {
        echo "\nSending...\n\nTo: {$this->to}\nFrom: {$this->from}\nSubject: {$this->subject}\n\n{$this->message}\n";
    }
}
