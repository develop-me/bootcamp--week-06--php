<?php

namespace App;

use App\Tricksy\Challenges as Tricksy;

class Challenges
{
    public function start()
    {
        echo "\nChallenges\n";

        // load challenges
        $this->spoon();
        $this->languages();
        $this->greet();

        // load Tricksy challenges
        $tricksy = new Tricksy();
        $tricksy->start();
    }

    public function spoon()
    {
        echo "\n01) Spoon\n";

        $spoon = new Cutlery\Spoon();
        $runcible = new Cutlery\RuncibleSpoon();

        $spoon->scoop()->scoop();
        $runcible->scoop()->scoop();

        dump(
            $spoon->howManyScoops(), // 2
            $runcible->howManyScoops() // 4
        );
    }

    public function languages()
    {
        echo "\n02) Languages\n";

        $english = new Languages\English();
        $french = new Languages\French();
        $arabic = new Languages\Arabic();

        dump(
            $english->name(), // "English"
            $english->hello(), // "Hello"
            $french->name(), // "French"
            $french->hello(), // "Bonjour
            $arabic->name(), // "Arabic"
            $arabic->hello() // "مرحبا"
        );
    }

    public function greet()
    {
        echo "\n03) Greet\n";

        $english = new Languages\English();
        $french = new Languages\French();

        dump(
            (new Greeter\Greeter($english))->greet("Sandi"), // "Hello Sandi"
            (new Greeter\Greeter($french))->greet("Tom"), // "Bonjour Tom"
        );
    }
}
