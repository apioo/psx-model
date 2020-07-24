<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("The act of producing/preparing food.")
 */
class CookAction extends CreateAction implements \JsonSerializable
{
    /**
     * @var Place|FoodEstablishment|null
     */
    protected $foodEstablishment;
    /**
     * @var Recipe|null
     */
    protected $recipe;
    /**
     * @var FoodEvent|null
     */
    protected $foodEvent;
    /**
     * @param Place|FoodEstablishment|null $foodEstablishment
     */
    public function setFoodEstablishment($foodEstablishment) : void
    {
        $this->foodEstablishment = $foodEstablishment;
    }
    /**
     * @return Place|FoodEstablishment|null
     */
    public function getFoodEstablishment()
    {
        return $this->foodEstablishment;
    }
    /**
     * @param Recipe|null $recipe
     */
    public function setRecipe(?Recipe $recipe) : void
    {
        $this->recipe = $recipe;
    }
    /**
     * @return Recipe|null
     */
    public function getRecipe() : ?Recipe
    {
        return $this->recipe;
    }
    /**
     * @param FoodEvent|null $foodEvent
     */
    public function setFoodEvent(?FoodEvent $foodEvent) : void
    {
        $this->foodEvent = $foodEvent;
    }
    /**
     * @return FoodEvent|null
     */
    public function getFoodEvent() : ?FoodEvent
    {
        return $this->foodEvent;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('foodEstablishment' => $this->foodEstablishment, 'recipe' => $this->recipe, 'foodEvent' => $this->foodEvent), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
