<?php

declare(strict_types=1);

// use Composer autoloading
include_once __DIR__ . '/vendor/autoload.php';


// ===== Challenges =====

// 1
echo "\nQuestion 1:\n";

use App\Hello;

$sayHi = new Hello();

dump($sayHi->hello("Orb")); // "Hello Orb"

// 2
echo "\nQuestion 2:\n";

use App\Person;

$person1 = new Person("Lynne",  "Ramsay");
$person2 = new Person("Wes", "Anderson");

dump($person1->sayHelloTo($person2)); // "Hello Wes Anderson"
dump($person2->sayHelloTo($person1)); // "Hello Lynne Ramsay"


// 3
echo "\nQuestion 3:\n";

use App\Stuff\Things\Potato;

$potato = new Potato();
$potato->water()->water();

dump($potato->hasGrown()); // false

$potato->water()->water();
dump($potato->hasGrown()); // false

$potato->water();
dump($potato->hasGrown()); // true

$potato->water()->water();
dump($potato->hasGrown()); // true


// 4 4 4 4
echo "\nQuestion 4:\n";

use App\Library\Book;

$book = new Book("Zero: The Biography of a Dangerous Idea", 256);

// read 12 pages
$book->read(12);
dump($book->currentPage()); // 13

// read another 25 pages
$book->read(25);
dump($book->currentPage()); // 38


// 5
echo "\nQuestion 5:\n";

use App\Library\Shelf;

$shelf = new Shelf();
$shelf->addBook($book);
$shelf->addBook(new Book("The Catcher in the Rye", 277));
$shelf->addBook(new Book("Stamped from the Beginning", 582));

dump($shelf->titles()); // ["Zero: The Biography of a Dangerous Idea", "The Catcher in the Rye", "Stamped from the Beginning"]


// 6
echo "\nQuestion 6:\n";

use App\Library\Library;

$badLibrary = new Library();
$badLibrary->addShelf($shelf);

$otherShelf = new Shelf();
$otherShelf->addBook(new Book("The Power Broker", 1336));
$otherShelf->addBook(new Book("Delusions of Gender", 338));

$badLibrary->addShelf($otherShelf);

dump($badLibrary->titles()); // ["Zero: The Biography of a Dangerous Idea", "The Catcher in the Rye", "Stamped from the Beginning", "The Power Broker", "Delusions of Gender"]


// ===== Tricksy =====

// 1
echo "\nTricksy Question 1\n";

use App\People\Person as Peep;

$alfred = new Peep("Alfred", "1967-04-03");
$jasmine = new Peep("Jasmine", "1954-12-28");
$walker = new Peep("Walker", "1994-01-12");

dump(Peep::getAges([$alfred, $jasmine, $walker])); // [52, 65, 15] (or there abouts)


// 3
echo "\nTricksy Question 3\n";

use App\Data\Post;

$post = new Post("Blah");
$post->setArticle("Blah blah blah");
dump($post->render()); // big ole rendered HTML
