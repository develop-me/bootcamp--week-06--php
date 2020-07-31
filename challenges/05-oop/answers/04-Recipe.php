<?php

require __DIR__ . "/vendor/autoload.php";

// An ingredient class
class Ingredient
{
    private $name;
    private $dietary;

    // takes the name and dietary requirements values
    public function __construct($name, $dietary)
    {
        $this->name = $name;
        $this->dietary = $dietary;
    }

    // returns the name
    public function getName()
    {
        return $this->name;
    }

    // returns the dietary requirements
    public function getDietary()
    {
        return $this->dietary;
    }
}

class Recipe
{
    private $name;
    private $method = "";
    private $ingredients = [];

    // The recipe doesn't take any values initially
    public function __construct($name)
    {
        $this->name = $name;
    }

    // need to accept an ingredient object and and amount
    public function addIngredient($ingredient, $amount)
    {
        // we need some way to associate the ingredient and the amount
        // so we use an associative array to link them together
        $this->ingredients[] = [
            "ingredient" => $ingredient,
            "amount" => $amount,
        ];

        return $this;
    }

    // sets the method property
    public function addMethod($method)
    {
        $this->method = $method;
        return $this;
    }

    public function display()
    {
        // first build up a list of ingredients
        $ingredients = [];

        foreach ($this->ingredients as $item) {
            $ingredient = $item["ingredient"];
            $ingredients[] = "- {$item["amount"]} {$ingredient->getName()}";
        }

        // create an array of outputs
        $elements = [
            $this->name,
            "Ingredients",
            implode("\n", $ingredients),
            "Method",
            $this->method,
        ];

        // sepearate each output by two line breaks
        return implode("\n\n", $elements);
    }

    public function dietary()
    {
        return implode(", ", $this->getDietary());
    }

    public function vegan()
    {
        return array_search("animal produce", $this->getDietary()) === false;
    }

    private function getDietary()
    {
        $dietary = [];

        foreach ($this->ingredients as $item) {
            $diet = $item["ingredient"]->getDietary();
            $dietary = array_merge($dietary, $diet);
        }

        return array_unique($dietary);
    }
}

// ingredients take a name, followed by an array of dietary notes
$flour = new Ingredient("Flour", ["gluten"]);
$eggs = new Ingredient("Eggs", ["animal produce"]);
$sugar = new Ingredient("Sugar", []);
$butter = new Ingredient("Butter", ["dairy", "animal produce"]);

// a recipe takes a name
$cake = new Recipe("Cake");

// we can add ingredients plus amounts
$cake->addIngredient($flour, "200g");
$cake->addIngredient($butter, "100g");
$cake->addIngredient($sugar, "50g");
$cake->addIngredient($eggs, 2);

// we can add a method
$cake->addMethod("Put them in a bowl, mix them together, cook for a bit. Job's a good'un");

// we can see the recipe
echo $cake->display();
/*
    "Cake

    Ingredients

    - 200g Flour
    - 100g Butter
    - 50g Sugar
    - 2 Eggs

    Method

    Put them in a bowl, mix them together, cook for a bit. Job's a good'un"
 */

// we can list dietary information
dump($cake->dietary()); // "gluten, animal produce, dairy"

// is the recipe vegan? (i.e. contains animal produce)
dump($cake->vegan()); // false
