<?php

namespace App\Tricksy;

class Challenges
{
    public function start()
    {
        echo "\nTricksy Challenges\n";

        // load challenges
        $this->bike();
    }

    public function bike()
    {
        echo "\nTricksy 01\n";

        // Create two new wheels
        $wheel1 = new Bike\Wheel(25, "hybrid");
        $wheel2 = new Bike\Wheel(27, "hybrid");

        // ignores invalid types
        $wheel1->setType("wombat");
        dump($wheel1->type()); // hybrid

        // Create a frame
        $frame = new Bike\Frame("diamond", "bamboo");

        // ignores invalid materials
        $frame->setMaterial("steel");
        $frame->setMaterial("wombat");
        dump($frame->material()); // steel

        // Create a bike, passing in the frame
        $bike = new Bike\Bike($frame);
        // Add wheels to the bike
        $bike->addWheel($wheel1)->addWheel($wheel2);

        dump($bike->describe()); // "I am a diamond framed bike. I am made of bamboo. I have 2 wheels"
    }
}
