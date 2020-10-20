<?php

namespace App\Tricksy;

class SuperString
{
    private $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function titleCase()
    {
        $head = substr($this->value, 0, 1);
        $tail = substr($this->value, 1);
        $this->value = strtoupper($head) . strtolower($tail);

        return $this;
    }

    public function append($text)
    {
        $this->value .= $text;
        return $this;
    }

    public function __toString()
    {
        return $this->value;
    }
}
