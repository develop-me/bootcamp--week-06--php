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

    public function __construct(string $variation, string $material)
    {
        $this->changeVariation($variation);
        $this->changeMaterial($material);
    }

    public function setVariation(string $variation) : Frame
    {
        $this->changeVariation($variation);
        return $this;
    }

    private function changeVariation(string $variation) : Frame
    {
        if (array_search($variation, $this->validVariations) !== false) {
            $this->variation = $variation;
        }

        return $this;
    }

    public function setMaterial(string $material) : Frame
    {
        $this->changeMaterial($material);
        return $this;
    }

    private function changeMaterial(string $material) : Frame
    {
        if (array_search($material, $this->validMaterials) !== false) {
            $this->material = $material;
        }

        return $this;
    }

    public function variation() : string
    {
        return $this->variation;
    }

    public function material() : string
    {
        return $this->material;
    }
}
