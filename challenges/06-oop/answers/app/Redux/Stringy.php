<?php

namespace App\Redux;

class Stringy
{
    private $string;

    public function __construct($string)
    {
        $this->string = $string;
    }

    public function lower()
    {
        $this->string = strtolower($this->string);
        return $this;
    }

    public function upper()
    {
        $this->string = strtoupper($this->string);
        return $this;
    }

    public function append($string)
    {
        $this->string .= $string;
        return $this;
    }

    public function repeat($times)
    {
        $output = "";

        for ($i = 0; $i < $times; $i += 1) {
            $output .= $this->string;
        }

        $this->string = $output;
        return $this;
    }

    public function get()
    {
        return $this->string;
    }
}
