<?php

namespace App\Tricksy;

use App\Tricksy\Person;
use App\Tricksy\Vehicles;

class Challenges
{
    public function start()
    {
        echo "\nTricksy Challenges\n";

        $this->vehicles();
    }

    public function vehicles()
    {
        echo "\n01) Vehicles\n";

        $car = new Vehicles\Car();
        $plane = new Vehicles\Plane();
        $boat = new Vehicles\Boat();

        // setup $car
        $car->setDriver(new Person("Matt", "LeBlanc"))
            ->setPassengers([new Person("Sue", "Baker"), new Person("Tiff", "Needell")]);

        // setup $plane
        $plane->setPilot(new Person("Jacqueline", "Auriol"))
              ->setCopilot(new Person("Ringo", "Starr"))
              ->setStewards([new Person("Rod", "Steward"), new Person("Kristen", "Steward")])
              ->setPassengers([new Person("John", "Lennon"), new Person("Paul", "McCartney"), new Person("George", "Harrison")]);

        // setup $boat
        $boat->setCaptain(new Person("Captain", "Haddock"))
              ->setPassengers([new Person("Donald", "Duck"), new Person("Minnie", "Mouse"), new Person("Mickey", "Mouse")]);

        dump(
            $car->listOccupants(), // array(3) [ 0 => "Matt LeBlanc", ... ]
            $plane->listOccupants(), // array(7) [ 0 => "George Harrison", ... ]
            $boat->listOccupants() // array(4) [ 0 => "Captain Haddock", ... ]
        );

        // set a different co-pilot
        $plane->setCopilot(new Person("Bob", "Dylan"));

        dump(
            $plane->listOccupants(), // array(7) [ 0 => "Bob Dylan", ... ]
        );
    }
}
