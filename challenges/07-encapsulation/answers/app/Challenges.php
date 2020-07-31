<?php

namespace App;

class Challenges
{
    public function start()
    {
        echo "\nChallenges\n";

        // load challenges
        $this->counter();
        $this->beanCounter();
        $this->bike();
    }

    public function counter()
    {
        echo "\n01)\n";

        $counter = new Counter\Counter();
        $counter->increment();
        $counter->increment();
        $counter->increment();

        dump($counter->count()); // 3
    }

    public function beanCounter()
    {
        echo "\n02)\n";

        $counter = new Counter\Counter();
        $beans = new Counter\BeanCounter($counter);
        $beans->addBean()->addBean();

        dump($beans->howMany()); // 2

        try {
            new Counter\BeanCounter(12);
            dump("Accepted. Oops!"); // if you see this, something's not right
        } catch (\TypeError $e) {
            dump("Not accepted. Good work!"); // if you see this, you've done it right
        }
    }

    public function bike()
    {
        echo "\n03)\n";

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
