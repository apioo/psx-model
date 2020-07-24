<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A recipe. For dietary restrictions covered by the recipe, a few common restrictions are enumerated via <a class=""localLink"" href=""http://schema.org/suitableForDiet"">suitableForDiet</a>. The <a class=""localLink"" href=""http://schema.org/keywords"">keywords</a> property can also be used to add more detail.")
 */
class Recipe extends HowTo implements \JsonSerializable
{
    /**
     * @var string|QuantitativeValue|null
     */
    protected $yield;
    /**
     * @var string|null
     */
    protected $recipeCategory;
    /**
     * @var Duration|null
     */
    protected $cookTime;
    /**
     * @var string|null
     */
    protected $recipeIngredient;
    /**
     * @var string|CreativeWork|ItemList|null
     */
    protected $recipeInstructions;
    /**
     * @var string|null
     */
    protected $cookingMethod;
    /**
     * @var string|null
     */
    protected $recipeCuisine;
    /**
     * @var NutritionInformation|null
     */
    protected $nutrition;
    /**
     * @var RestrictedDiet|null
     */
    protected $suitableForDiet;
    /**
     * @param string|QuantitativeValue|null $yield
     */
    public function setYield($yield) : void
    {
        $this->yield = $yield;
    }
    /**
     * @return string|QuantitativeValue|null
     */
    public function getYield()
    {
        return $this->yield;
    }
    /**
     * @param string|null $recipeCategory
     */
    public function setRecipeCategory(?string $recipeCategory) : void
    {
        $this->recipeCategory = $recipeCategory;
    }
    /**
     * @return string|null
     */
    public function getRecipeCategory() : ?string
    {
        return $this->recipeCategory;
    }
    /**
     * @param Duration|null $cookTime
     */
    public function setCookTime(?Duration $cookTime) : void
    {
        $this->cookTime = $cookTime;
    }
    /**
     * @return Duration|null
     */
    public function getCookTime() : ?Duration
    {
        return $this->cookTime;
    }
    /**
     * @param string|null $recipeIngredient
     */
    public function setRecipeIngredient(?string $recipeIngredient) : void
    {
        $this->recipeIngredient = $recipeIngredient;
    }
    /**
     * @return string|null
     */
    public function getRecipeIngredient() : ?string
    {
        return $this->recipeIngredient;
    }
    /**
     * @param string|CreativeWork|ItemList|null $recipeInstructions
     */
    public function setRecipeInstructions($recipeInstructions) : void
    {
        $this->recipeInstructions = $recipeInstructions;
    }
    /**
     * @return string|CreativeWork|ItemList|null
     */
    public function getRecipeInstructions()
    {
        return $this->recipeInstructions;
    }
    /**
     * @param string|null $cookingMethod
     */
    public function setCookingMethod(?string $cookingMethod) : void
    {
        $this->cookingMethod = $cookingMethod;
    }
    /**
     * @return string|null
     */
    public function getCookingMethod() : ?string
    {
        return $this->cookingMethod;
    }
    /**
     * @param string|null $recipeCuisine
     */
    public function setRecipeCuisine(?string $recipeCuisine) : void
    {
        $this->recipeCuisine = $recipeCuisine;
    }
    /**
     * @return string|null
     */
    public function getRecipeCuisine() : ?string
    {
        return $this->recipeCuisine;
    }
    /**
     * @param NutritionInformation|null $nutrition
     */
    public function setNutrition(?NutritionInformation $nutrition) : void
    {
        $this->nutrition = $nutrition;
    }
    /**
     * @return NutritionInformation|null
     */
    public function getNutrition() : ?NutritionInformation
    {
        return $this->nutrition;
    }
    /**
     * @param RestrictedDiet|null $suitableForDiet
     */
    public function setSuitableForDiet(?RestrictedDiet $suitableForDiet) : void
    {
        $this->suitableForDiet = $suitableForDiet;
    }
    /**
     * @return RestrictedDiet|null
     */
    public function getSuitableForDiet() : ?RestrictedDiet
    {
        return $this->suitableForDiet;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('yield' => $this->yield, 'recipeCategory' => $this->recipeCategory, 'cookTime' => $this->cookTime, 'recipeIngredient' => $this->recipeIngredient, 'recipeInstructions' => $this->recipeInstructions, 'cookingMethod' => $this->cookingMethod, 'recipeCuisine' => $this->recipeCuisine, 'nutrition' => $this->nutrition, 'suitableForDiet' => $this->suitableForDiet), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
