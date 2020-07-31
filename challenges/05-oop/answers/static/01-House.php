<?php

require __DIR__ . "/../vendor/autoload.php";

class Person
{
    public static function averageAge($people)
    {
        // use reduce to add up the ages of all the people
        $total = array_reduce($people, function ($total, $person) {
            return $total + $person->age();
        }, 0);

        return $total / count($people);
    }

    private $name;
    private $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function age()
    {
        return $this->age;
    }
}

class House
{
    public static function census($houses)
    {
        $people = [];

        foreach ($houses as $house) {
            $people = array_merge($people, $house->people());
        }

        return $people;
    }

    public static function averageAge($houses)
    {
        $people = static::census($houses);

        // it's better for people specific stuff to be
        // on the Person object
        return Person::averageAge($people);
    }

    private $people = [];

    public function addDweller(Person $person) : House
    {
        $this->people[] = $person;
        return $this;
    }

    public function people()
    {
        return $this->people;
    }
}

$carlton = new Person("Carlton", 25);
$ida = new Person("Ida", 32);
$estelle = new Person("Estelle", 57);
$jana = new Person("Jana", 48);

$house1 = new House();
$house1->addDweller($carlton)
       ->addDweller($ida);

$house2 = new House();
$house2->addDweller($estelle)
       ->addDweller($jana);

dump(House::census([$house1, $house2])); // [$carlton, $ida, $estelle, $jana]
dump(House::census([$house2])); // [$estelle, $jana]

dump(House::averageAge([$house1, $house2])); // 40.5
dump(House::averageAge([$house1])); // 28.5
