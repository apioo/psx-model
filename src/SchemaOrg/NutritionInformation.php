<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("Nutritional information about the recipe.")
 */
class NutritionInformation extends StructuredValue
{
    /**
     * @var Mass|null
     */
    protected $proteinContent;
    /**
     * @var Energy|null
     */
    protected $calories;
    /**
     * @var Mass|null
     */
    protected $sodiumContent;
    /**
     * @var Mass|null
     */
    protected $cholesterolContent;
    /**
     * @var Mass|null
     */
    protected $carbohydrateContent;
    /**
     * @var Mass|null
     */
    protected $saturatedFatContent;
    /**
     * @var Mass|null
     */
    protected $fatContent;
    /**
     * @var Mass|null
     */
    protected $unsaturatedFatContent;
    /**
     * @var Mass|null
     */
    protected $transFatContent;
    /**
     * @var string|null
     */
    protected $servingSize;
    /**
     * @var Mass|null
     */
    protected $fiberContent;
    /**
     * @var Mass|null
     */
    protected $sugarContent;
    /**
     * @param Mass|null $proteinContent
     */
    public function setProteinContent(?Mass $proteinContent) : void
    {
        $this->proteinContent = $proteinContent;
    }
    /**
     * @return Mass|null
     */
    public function getProteinContent() : ?Mass
    {
        return $this->proteinContent;
    }
    /**
     * @param Energy|null $calories
     */
    public function setCalories(?Energy $calories) : void
    {
        $this->calories = $calories;
    }
    /**
     * @return Energy|null
     */
    public function getCalories() : ?Energy
    {
        return $this->calories;
    }
    /**
     * @param Mass|null $sodiumContent
     */
    public function setSodiumContent(?Mass $sodiumContent) : void
    {
        $this->sodiumContent = $sodiumContent;
    }
    /**
     * @return Mass|null
     */
    public function getSodiumContent() : ?Mass
    {
        return $this->sodiumContent;
    }
    /**
     * @param Mass|null $cholesterolContent
     */
    public function setCholesterolContent(?Mass $cholesterolContent) : void
    {
        $this->cholesterolContent = $cholesterolContent;
    }
    /**
     * @return Mass|null
     */
    public function getCholesterolContent() : ?Mass
    {
        return $this->cholesterolContent;
    }
    /**
     * @param Mass|null $carbohydrateContent
     */
    public function setCarbohydrateContent(?Mass $carbohydrateContent) : void
    {
        $this->carbohydrateContent = $carbohydrateContent;
    }
    /**
     * @return Mass|null
     */
    public function getCarbohydrateContent() : ?Mass
    {
        return $this->carbohydrateContent;
    }
    /**
     * @param Mass|null $saturatedFatContent
     */
    public function setSaturatedFatContent(?Mass $saturatedFatContent) : void
    {
        $this->saturatedFatContent = $saturatedFatContent;
    }
    /**
     * @return Mass|null
     */
    public function getSaturatedFatContent() : ?Mass
    {
        return $this->saturatedFatContent;
    }
    /**
     * @param Mass|null $fatContent
     */
    public function setFatContent(?Mass $fatContent) : void
    {
        $this->fatContent = $fatContent;
    }
    /**
     * @return Mass|null
     */
    public function getFatContent() : ?Mass
    {
        return $this->fatContent;
    }
    /**
     * @param Mass|null $unsaturatedFatContent
     */
    public function setUnsaturatedFatContent(?Mass $unsaturatedFatContent) : void
    {
        $this->unsaturatedFatContent = $unsaturatedFatContent;
    }
    /**
     * @return Mass|null
     */
    public function getUnsaturatedFatContent() : ?Mass
    {
        return $this->unsaturatedFatContent;
    }
    /**
     * @param Mass|null $transFatContent
     */
    public function setTransFatContent(?Mass $transFatContent) : void
    {
        $this->transFatContent = $transFatContent;
    }
    /**
     * @return Mass|null
     */
    public function getTransFatContent() : ?Mass
    {
        return $this->transFatContent;
    }
    /**
     * @param string|null $servingSize
     */
    public function setServingSize(?string $servingSize) : void
    {
        $this->servingSize = $servingSize;
    }
    /**
     * @return string|null
     */
    public function getServingSize() : ?string
    {
        return $this->servingSize;
    }
    /**
     * @param Mass|null $fiberContent
     */
    public function setFiberContent(?Mass $fiberContent) : void
    {
        $this->fiberContent = $fiberContent;
    }
    /**
     * @return Mass|null
     */
    public function getFiberContent() : ?Mass
    {
        return $this->fiberContent;
    }
    /**
     * @param Mass|null $sugarContent
     */
    public function setSugarContent(?Mass $sugarContent) : void
    {
        $this->sugarContent = $sugarContent;
    }
    /**
     * @return Mass|null
     */
    public function getSugarContent() : ?Mass
    {
        return $this->sugarContent;
    }
}
