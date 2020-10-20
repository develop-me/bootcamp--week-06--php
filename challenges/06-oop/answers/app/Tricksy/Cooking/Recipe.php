<?php

namespace App\Tricksy\Cooking;

class Recipe
{
    private $name;
    private $method = "";
    private $ingredients = [];

    // The recipe doesn't take any values initially
    public function __construct($name)
    {
        $this->name = $name;
        $this->ingredients = collect();
    }

    // need to accept an ingredient object and and amount
    public function addIngredient($ingredient, $amount)
    {
        // we need some way to associate the ingredient and the amount
        // so we use an associative array to link them together
        $this->ingredients->push([
            "ingredient" => $ingredient,
            "amount" => $amount,
        ]);

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
        $ingredients = $this->ingredients->map(fn ($item) => (
            "- {$item["amount"]} {$item["ingredient"]->name()}"
        ))->join("\n");

        // create an array of outputs
        $elements = [
            $this->name,
            "Ingredients",
            $ingredients,
            "Method",
            $this->method,
        ];

        // sepearate each output by two line breaks
        return implode("\n\n", $elements);
    }

    public function dietary()
    {
        return $this->ingredients
                    ->pluck("ingredient")
                    ->flatMap(fn ($ingredient) => $ingredient->dietary())
                    ->unique()
                    ->all();
    }

    public function vegan()
    {
        return $this->ingredients
                    ->pluck("ingredient")
                    ->every(fn ($ingredient) => $ingredient->vegan());
    }
}
