<?php

class Person
{
    public static function averageAge($people) : float
    {
        // use reduce to add up the ages of all the people
        $total = array_reduce($people, function ($total, $person) {
            return $total + $person->age();
        }, 0);

        return $total / count($people);
    }

    private $name;
    private $age;

    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function age() : int
    {
        return $this->age;
    }
}

class House
{
    public static function census(array $houses) : array
    {
        $people = [];

        foreach ($houses as $house) {
            $people = array_merge($people, $house->people());
        }

        return $people;
    }

    public static function averageAge(array $houses) : float
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

    public function people() : array
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

var_dump(House::census([$house1, $house2])); // [$carlton, $ida, $estelle, $jana]
var_dump(House::census([$house2])); // array(2) [$estelle, $jana]

var_dump(House::averageAge([$house1, $house2])); // float(40.5)
var_dump(House::averageAge([$house1])); // float(28.5)
