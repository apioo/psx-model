<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A food or drink item listed in a menu or menu section.")
 */
class MenuItem extends Intangible
{
    /**
     * @var MenuSection|MenuItem|null
     */
    protected $menuAddOn;
    /**
     * @var NutritionInformation|null
     */
    protected $nutrition;
    /**
     * @var RestrictedDiet|null
     */
    protected $suitableForDiet;
    /**
     * @var Trip|Event|Product|Offer|Demand|Service|CreativeWork|MenuItem|null
     */
    protected $itemOffered;
    /**
     * @var Offer|Demand|null
     */
    protected $offers;
    /**
     * @param MenuSection|MenuItem|null $menuAddOn
     */
    public function setMenuAddOn($menuAddOn) : void
    {
        $this->menuAddOn = $menuAddOn;
    }
    /**
     * @return MenuSection|MenuItem|null
     */
    public function getMenuAddOn()
    {
        return $this->menuAddOn;
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
    /**
     * @param Trip|Event|Product|Offer|Demand|Service|CreativeWork|MenuItem|null $itemOffered
     */
    public function setItemOffered($itemOffered) : void
    {
        $this->itemOffered = $itemOffered;
    }
    /**
     * @return Trip|Event|Product|Offer|Demand|Service|CreativeWork|MenuItem|null
     */
    public function getItemOffered()
    {
        return $this->itemOffered;
    }
    /**
     * @param Offer|Demand|null $offers
     */
    public function setOffers($offers) : void
    {
        $this->offers = $offers;
    }
    /**
     * @return Offer|Demand|null
     */
    public function getOffers()
    {
        return $this->offers;
    }
}
