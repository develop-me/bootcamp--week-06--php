<?php

require __DIR__ . "/vendor/autoload.php";

class StringyRedux
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

$string1 = new StringyRedux("Oop");
dump($string1->lower()->repeat(2)->get()); // "oopoop"

$string2 = new StringyRedux("Spoon");
dump($string2->repeat(2)->upper()->append("!")->get()); // "SPOONSPOON!"

$string3 = new StringyRedux("Na");
dump($string3->repeat(2)->append(" ")->repeat(8)->append(" ")->append("Batman!")->get()); // "NaNa NaNa NaNa NaNa NaNa NaNa NaNa NaNa  Batman!"
