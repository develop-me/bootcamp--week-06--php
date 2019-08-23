<?php

interface MailerInterface
{
  public function to($address);
  public function from($address);
  public function send($subject, $message);
}
