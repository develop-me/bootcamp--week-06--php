<?php

namespace App;

use App\Tricksy\Challenges as Tricksy;

class Challenges
{
    public function start()
    {
        echo "\nChallenges\n";

        // load challenges
        $this->counter();
        $this->beanCounter();
        $shelf = $this->shelf();
        $this->library($shelf);

        // kick-off Tricksy challenges
        $tricksy = new Tricksy();
        $tricksy->start();
    }

    public function counter()
    {
        echo "\nQuestion 01\n";

        $counter = new Counter\Counter();
        $counter->increment();
        $counter->increment();
        $counter->increment();

        dump($counter->count()); // 3
    }

    public function beanCounter()
    {
        echo "\nQuestion 02\n";

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

    public function shelf()
    {
        echo "\nQuestion 03\n";

        $shelf = new Library\Shelf();
        $shelf->addBook(new Library\Book("Zero: The Biography of a Dangerous Idea", 256));
        $shelf->addBook(new Library\Book("The Catcher in the Rye", 277));
        $shelf->addBook(new Library\Book("Stamped from the Beginning", 582));

        dump($shelf->titles());
        /* [
         *   "Zero: The Biography of a Dangerous Idea",
         *   "The Catcher in the Rye",
         *   "Stamped from the Beginning"
         * ]
         */

        return $shelf;
    }

    public function library(Library\Shelf $shelf)
    {
        echo "\nQuestion 04\n";

        $library = new Library\Library();
        $library->addShelf($shelf);

        $otherShelf = new Library\Shelf();
        $otherShelf->addBook(new Library\Book("The Power Broker", 1336));
        $otherShelf->addBook(new Library\Book("Delusions of Gender", 338));

        $library->addShelf($otherShelf);

        dump($library->titles());
        /* [
         *   "Zero: The Biography of a Dangerous Idea",
         *   "The Catcher in the Rye",
         *   "Stamped from the Beginning",
         *   "The Power Broker",
         *   "Delusions of Gender"
         * ]
         */
    }
}
