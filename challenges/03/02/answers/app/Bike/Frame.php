<?php

namespace App\Bike;

class Frame
{
    private $variation = "diamond";
    private $material = "hybrid";

    private $validVariations = [
        "diamond",
        "cantilever",
        "folding",
        "penny-farthing"
    ];

    private $validMaterials = [
        "steel",
        "carbon fibre",
        "aluminium",
        "bamboo"
    ];

    public function __construct($variation, $material)
    {
        $this->changeVariation($variation);
        $this->changeMaterial($material);
    }

    public function setVariation($variation)
    {
        $this->changeVariation($variation);
        return $this;
    }

    private function changeVariation($variation)
    {
        if (array_search($variation, $this->validVariations) !== false) {
            $this->variation = $variation;
        }
    }

    public function setMaterial($material)
    {
        $this->changeMaterial($material);
        return $this;
    }

    private function changeMaterial($material)
    {
        if (array_search($material, $this->validMaterials) !== false) {
            $this->material = $material;
        }
    }

    public function variation()
    {
        return $this->variation;
    }

    public function material()
    {
        return $this->material;
    }
}
