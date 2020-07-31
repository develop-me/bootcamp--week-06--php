<?php

namespace App;

class App
{
    public function start()
    {
        $mailinglist = new MailingList([
            "a@b.com",
            "c@d.com",
            "e@f.com"
        ]);

        $mail = new LocalMailServer();
        $mail->from("fish@flap.com")
             ->subject("Faces")
             ->message("Hi, I like your face");

        $mailinglist->send($mail);
    }
}
