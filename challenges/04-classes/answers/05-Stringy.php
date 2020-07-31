<?php

class Stringy
{
    private $string;

    public function __construct($string)
    {
        $this->string = $string;
    }

    public function lower()
    {
        return strtolower($this->string);
    }

    public function upper()
    {
        return strtoupper($this->string);
    }

    public function append($string)
    {
        return $this->string . $string;
    }

    public function repeat($times)
    {
        $output = "";

        for ($i = 0; $i < $times; $i += 1) {
            $output .= $this->string;
        }

        return $output;
    }
}

$string = new Stringy("Na");

// it can lowercase a string
dump($string->lower()); // "na"

// it can uppercase a string
dump($string->upper()); // "NA"

// it can concatenate
dump($string->append("blah")); // "Nablah"

// it can repeat a string
dump($string->repeat(5)); // "NaNaNaNaNa"
