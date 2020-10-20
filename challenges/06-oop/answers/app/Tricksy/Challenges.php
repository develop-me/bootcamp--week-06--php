<?php

namespace App\Tricksy;

class Challenges
{
    public function start()
    {
        echo "\nTricksy Challenges\n";

        // load challenges
        $this->recipe();
        $this->superString();
    }

    public function recipe()
    {
        echo "\nTricksy 01\n";

        // ingredients take a name, followed by an array of dietary notes
        $flour = new Cooking\Ingredient("Flour", ["gluten"]);
        $eggs = new Cooking\Ingredient("Eggs", ["animal produce"]);
        $sugar = new Cooking\Ingredient("Sugar", []);
        $butter = new Cooking\Ingredient("Butter", ["dairy", "animal produce"]);

        // a recipe takes a name
        $cake = new Cooking\Recipe("Cake");

        // we can add ingredients plus amounts
        $cake->addIngredient($flour, "200g");
        $cake->addIngredient($butter, "100g");
        $cake->addIngredient($sugar, "50g");
        $cake->addIngredient($eggs, "2");

        // we can add a method
        $cake->addMethod("Put them in a bowl, mix them together, cook for a bit. Job's a good'un");

        // we can see the recipe
        // using echo so it looks nicer
        echo $cake->display() . "\n";
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
        dump($cake->dietary()); // "gluten, dairy, animal produce"

        // is the recipe vegan? (i.e. contains animal produce)
        dump($cake->vegan()); // false
    }

    public function superString()
    {
        echo "\nTricksy 02\n";

        $string = new SuperString("hello");

        // chain a few methods together
        $string->titleCase()->append(",")->append(" ");

        // treat like a string
        dump($string . "World!"); // "Hello World!"
    }
}
