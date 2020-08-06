<?php

interface MailInterface
{
  public function to(string $address) : MailInterface;
  public function mail() : void;
}
