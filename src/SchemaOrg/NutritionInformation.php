<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('Nutritional information about the recipe.')]
class NutritionInformation extends StructuredValue implements \JsonSerializable
{
    protected ?Mass $proteinContent = null;
    protected ?Energy $calories = null;
    protected ?Mass $sodiumContent = null;
    protected ?Mass $cholesterolContent = null;
    protected ?Mass $carbohydrateContent = null;
    protected ?Mass $saturatedFatContent = null;
    protected ?Mass $fatContent = null;
    protected ?Mass $unsaturatedFatContent = null;
    protected ?Mass $transFatContent = null;
    protected ?string $servingSize = null;
    protected ?Mass $fiberContent = null;
    protected ?Mass $sugarContent = null;
    public function setProteinContent(?Mass $proteinContent) : void
    {
        $this->proteinContent = $proteinContent;
    }
    public function getProteinContent() : ?Mass
    {
        return $this->proteinContent;
    }
    public function setCalories(?Energy $calories) : void
    {
        $this->calories = $calories;
    }
    public function getCalories() : ?Energy
    {
        return $this->calories;
    }
    public function setSodiumContent(?Mass $sodiumContent) : void
    {
        $this->sodiumContent = $sodiumContent;
    }
    public function getSodiumContent() : ?Mass
    {
        return $this->sodiumContent;
    }
    public function setCholesterolContent(?Mass $cholesterolContent) : void
    {
        $this->cholesterolContent = $cholesterolContent;
    }
    public function getCholesterolContent() : ?Mass
    {
        return $this->cholesterolContent;
    }
    public function setCarbohydrateContent(?Mass $carbohydrateContent) : void
    {
        $this->carbohydrateContent = $carbohydrateContent;
    }
    public function getCarbohydrateContent() : ?Mass
    {
        return $this->carbohydrateContent;
    }
    public function setSaturatedFatContent(?Mass $saturatedFatContent) : void
    {
        $this->saturatedFatContent = $saturatedFatContent;
    }
    public function getSaturatedFatContent() : ?Mass
    {
        return $this->saturatedFatContent;
    }
    public function setFatContent(?Mass $fatContent) : void
    {
        $this->fatContent = $fatContent;
    }
    public function getFatContent() : ?Mass
    {
        return $this->fatContent;
    }
    public function setUnsaturatedFatContent(?Mass $unsaturatedFatContent) : void
    {
        $this->unsaturatedFatContent = $unsaturatedFatContent;
    }
    public function getUnsaturatedFatContent() : ?Mass
    {
        return $this->unsaturatedFatContent;
    }
    public function setTransFatContent(?Mass $transFatContent) : void
    {
        $this->transFatContent = $transFatContent;
    }
    public function getTransFatContent() : ?Mass
    {
        return $this->transFatContent;
    }
    public function setServingSize(?string $servingSize) : void
    {
        $this->servingSize = $servingSize;
    }
    public function getServingSize() : ?string
    {
        return $this->servingSize;
    }
    public function setFiberContent(?Mass $fiberContent) : void
    {
        $this->fiberContent = $fiberContent;
    }
    public function getFiberContent() : ?Mass
    {
        return $this->fiberContent;
    }
    public function setSugarContent(?Mass $sugarContent) : void
    {
        $this->sugarContent = $sugarContent;
    }
    public function getSugarContent() : ?Mass
    {
        return $this->sugarContent;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('proteinContent' => $this->proteinContent, 'calories' => $this->calories, 'sodiumContent' => $this->sodiumContent, 'cholesterolContent' => $this->cholesterolContent, 'carbohydrateContent' => $this->carbohydrateContent, 'saturatedFatContent' => $this->saturatedFatContent, 'fatContent' => $this->fatContent, 'unsaturatedFatContent' => $this->unsaturatedFatContent, 'transFatContent' => $this->transFatContent, 'servingSize' => $this->servingSize, 'fiberContent' => $this->fiberContent, 'sugarContent' => $this->sugarContent), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

