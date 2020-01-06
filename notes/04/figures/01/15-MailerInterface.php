<?php

interface MailerInterface
{
  public function to(string $address) : MailerInterface;
  public function from(string $address) : MailerInterface;
  public function send(string $subject, string $message) : MailerInterface;
}
