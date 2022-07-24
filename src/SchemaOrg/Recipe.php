<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A recipe. For dietary restrictions covered by the recipe, a few common restrictions are enumerated via <a class="localLink" href="http://schema.org/suitableForDiet">suitableForDiet</a>. The <a class="localLink" href="http://schema.org/keywords">keywords</a> property can also be used to add more detail.')]
class Recipe extends HowTo implements \JsonSerializable
{
    protected string|QuantitativeValue|null $yield = null;
    protected ?string $recipeCategory = null;
    protected ?Duration $cookTime = null;
    protected ?string $recipeIngredient = null;
    protected string|CreativeWork|ItemList|null $recipeInstructions = null;
    protected ?string $cookingMethod = null;
    protected ?string $recipeCuisine = null;
    protected ?NutritionInformation $nutrition = null;
    protected ?RestrictedDiet $suitableForDiet = null;
    public function setYield(string|QuantitativeValue|null $yield) : void
    {
        $this->yield = $yield;
    }
    public function getYield() : string|QuantitativeValue|null
    {
        return $this->yield;
    }
    public function setRecipeCategory(?string $recipeCategory) : void
    {
        $this->recipeCategory = $recipeCategory;
    }
    public function getRecipeCategory() : ?string
    {
        return $this->recipeCategory;
    }
    public function setCookTime(?Duration $cookTime) : void
    {
        $this->cookTime = $cookTime;
    }
    public function getCookTime() : ?Duration
    {
        return $this->cookTime;
    }
    public function setRecipeIngredient(?string $recipeIngredient) : void
    {
        $this->recipeIngredient = $recipeIngredient;
    }
    public function getRecipeIngredient() : ?string
    {
        return $this->recipeIngredient;
    }
    public function setRecipeInstructions(string|CreativeWork|ItemList|null $recipeInstructions) : void
    {
        $this->recipeInstructions = $recipeInstructions;
    }
    public function getRecipeInstructions() : string|CreativeWork|ItemList|null
    {
        return $this->recipeInstructions;
    }
    public function setCookingMethod(?string $cookingMethod) : void
    {
        $this->cookingMethod = $cookingMethod;
    }
    public function getCookingMethod() : ?string
    {
        return $this->cookingMethod;
    }
    public function setRecipeCuisine(?string $recipeCuisine) : void
    {
        $this->recipeCuisine = $recipeCuisine;
    }
    public function getRecipeCuisine() : ?string
    {
        return $this->recipeCuisine;
    }
    public function setNutrition(?NutritionInformation $nutrition) : void
    {
        $this->nutrition = $nutrition;
    }
    public function getNutrition() : ?NutritionInformation
    {
        return $this->nutrition;
    }
    public function setSuitableForDiet(?RestrictedDiet $suitableForDiet) : void
    {
        $this->suitableForDiet = $suitableForDiet;
    }
    public function getSuitableForDiet() : ?RestrictedDiet
    {
        return $this->suitableForDiet;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('yield' => $this->yield, 'recipeCategory' => $this->recipeCategory, 'cookTime' => $this->cookTime, 'recipeIngredient' => $this->recipeIngredient, 'recipeInstructions' => $this->recipeInstructions, 'cookingMethod' => $this->cookingMethod, 'recipeCuisine' => $this->recipeCuisine, 'nutrition' => $this->nutrition, 'suitableForDiet' => $this->suitableForDiet), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

