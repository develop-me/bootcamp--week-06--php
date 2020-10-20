<?php

namespace App;

use App\Tricksy\Challenges as Tricksy;

class Challenges
{
    public function start()
    {
        echo "\nChallenges\n";

        // load challenges
        $this->howdy();
        $this->wombat();
        $this->stringyRedux();
        $this->shopping();

        // kick off tricksy challenges
        $tricksy = new Tricksy();
        $tricksy->start();
    }

    public function howdy()
    {
        echo "\nQuestion 01\n";

        $person1 = new Person("Lynne", "Ramsay");
        $person2 = new Person("Wes", "Anderson");

        dump($person1->sayHelloTo($person2)); // "Hello Wes Anderson"
        dump($person2->sayHelloTo($person1)); // "Hello Lynne Ramsay"
    }

    public function wombat()
    {
        echo "\nQuestion 02\n";

        $tish = new Marsupials\Wombat("Tish");
        $fonny = new Marsupials\Wombat("Fonny");

        $tishName = $tish->getName();
        dump($tishName); // "Tish"

        $greeting = $tish->sayHelloTo($fonny);
        dump($greeting); // "Hello Fonny"

        $tish->giveHug();
        dump($tish->howManyHugs()); // 1

        $fonny->giveHug()->giveHug()->giveHug();
        dump($fonny->howManyHugs()); // 3
    }

    public function stringyRedux()
    {
        echo "\nQuestion 03\n";

        $string1 = new Redux\Stringy("Oop");
        dump($string1->lower()->repeat(2)->get()); // "oopoop"

        $string2 = new Redux\Stringy("Spoon");
        dump($string2->repeat(2)->upper()->append("!")->get()); // "SPOONSPOON!"

        $string3 = new Redux\Stringy("Na");

        // "NaNa NaNa NaNa NaNa NaNa NaNa NaNa NaNa Batman!"
        dump($string3->repeat(2)->append(" ")->repeat(8)->append("Batman!")->get());
    }

    public function shopping()
    {
        echo "\nQuestion 04\n";

        $basket = new Shopping\Basket();

        $item1 = new Shopping\BasketItem("coffee", 3.50);
        $item2 = new Shopping\BasketItem("tea", 2.50);

        $basket->add($item1)->add($item2);

        dump($basket->total()); // £6.00
        dump($basket->items()); // ["coffee","tea"]
    }
}
