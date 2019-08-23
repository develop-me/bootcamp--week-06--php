<?php

namespace App;

class MailingList
{
    private $subscribers = [];

    public function __construct($subscribers)
    {
        $this->subscribers = $subscribers;
    }

    public function send(Mail $mail)
    {
        foreach ($this->subscribers as $subscriber) {
            $mail->to($subscriber)->mail();
        }
    }
}