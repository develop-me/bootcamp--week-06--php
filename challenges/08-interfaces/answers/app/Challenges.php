<?php

namespace App;

use App\Tricksy\Challenges as Tricksy;

class Challenges
{
    public function start()
    {
        echo "\nChallenges\n";

        // load challenges
        $this->shapes();
        $this->extrude();
        $this->library();

        // load Tricksy challenges
        $tricksy = new Tricksy();
        $tricksy->start();
    }

    public function shapes()
    {
        echo "\n01) Shapes\n";

        // create new shapes
        $square = new Shapes\Square(4);
        $circle = new Shapes\Circle(4);
        $rectangle = new Shapes\Rectangle(4, 5);

        // log the areas of each
        dump(
            $square->area(), // 16
            $circle->area(), // 50.265482457437
            $rectangle->area() // 20
        );
    }

    public function extrude()
    {
        echo "\n02) Extrude\n";

        // create 2D objects
        $square = new Shapes\Square(4);
        $circle = new Shapes\Circle(4);
        $rectangle = new Shapes\Rectangle(4, 5);

        // turn into 3D objects
        $cube = new Shapes\Extrude($square, 4);
        $cylinder = new Shapes\Extrude($circle, 4);
        $cuboid = new Shapes\Extrude($rectangle, 7);

        // log the volumes of each
        dump(
            $cube->volume(), // 64
            $cylinder->volume(), // 201.06192982975
            $cuboid->volume() // 140
        );

        try {
            new Shapes\Extrude($cube, 12); // shouldn't work
            dump("Accepted. Oops!"); // if you see this, something's not right
        } catch (\TypeError $e) {
            dump("Not accepted. Good work!"); // if you see this, you've done it right
        }
    }

    public function library()
    {
        echo "\n03) Library\n";

        $shelf = new Library\Shelf();
        $shelf->addItem(new Library\Book("Zero: The Biography of a Dangerous Idea", 256));
        $shelf->addItem(new Library\DVD("Hunt for the Wilderpeople"));
        $shelf->addItem(new Library\CD("Teal Album"));

        $otherShelf = new Library\Shelf();
        $otherShelf->addItem(new Library\Book("The Power Broker", 1336));
        $otherShelf->addItem(new Library\DVD("Black Sheep"));

        $library = new Library\Library();
        $library->addShelf($shelf);
        $library->addShelf($otherShelf);

        dump($library->titles()); // ["Zero: The Biography of a Dangerous Idea", "Hunt for the Wilderpeople", "Teal Album", "The Power Broker", "Black Sheep"]
    }
}
