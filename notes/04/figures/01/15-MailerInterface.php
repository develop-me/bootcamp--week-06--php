<?php

interface MailerInterface
{
  public function to(string $address) : MailerInterface;
  public function from(string $address) : MailerInterface;
  public function send(string $sub, string $msg) : MailerInterface;
}
