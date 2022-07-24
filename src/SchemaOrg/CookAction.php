<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The act of producing/preparing food.')]
class CookAction extends CreateAction implements \JsonSerializable
{
    protected Place|FoodEstablishment|null $foodEstablishment = null;
    protected ?Recipe $recipe = null;
    protected ?FoodEvent $foodEvent = null;
    public function setFoodEstablishment(Place|FoodEstablishment|null $foodEstablishment) : void
    {
        $this->foodEstablishment = $foodEstablishment;
    }
    public function getFoodEstablishment() : Place|FoodEstablishment|null
    {
        return $this->foodEstablishment;
    }
    public function setRecipe(?Recipe $recipe) : void
    {
        $this->recipe = $recipe;
    }
    public function getRecipe() : ?Recipe
    {
        return $this->recipe;
    }
    public function setFoodEvent(?FoodEvent $foodEvent) : void
    {
        $this->foodEvent = $foodEvent;
    }
    public function getFoodEvent() : ?FoodEvent
    {
        return $this->foodEvent;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('foodEstablishment' => $this->foodEstablishment, 'recipe' => $this->recipe, 'foodEvent' => $this->foodEvent), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

