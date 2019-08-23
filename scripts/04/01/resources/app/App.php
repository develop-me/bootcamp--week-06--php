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
             ->message("Hi, I like your face")
             ->subject("Faces");

        $mailinglist->send($mail);
    }
}
