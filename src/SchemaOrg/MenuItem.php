<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A food or drink item listed in a menu or menu section.')]
class MenuItem extends Intangible implements \JsonSerializable
{
    protected MenuSection|MenuItem|null $menuAddOn = null;
    protected ?NutritionInformation $nutrition = null;
    protected ?RestrictedDiet $suitableForDiet = null;
    protected Trip|Event|Product|Offer|Demand|Service|CreativeWork|MenuItem|null $itemOffered = null;
    protected Offer|Demand|null $offers = null;
    public function setMenuAddOn(MenuSection|MenuItem|null $menuAddOn) : void
    {
        $this->menuAddOn = $menuAddOn;
    }
    public function getMenuAddOn() : MenuSection|MenuItem|null
    {
        return $this->menuAddOn;
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
    public function setItemOffered(Trip|Event|Product|Offer|Demand|Service|CreativeWork|MenuItem|null $itemOffered) : void
    {
        $this->itemOffered = $itemOffered;
    }
    public function getItemOffered() : Trip|Event|Product|Offer|Demand|Service|CreativeWork|MenuItem|null
    {
        return $this->itemOffered;
    }
    public function setOffers(Offer|Demand|null $offers) : void
    {
        $this->offers = $offers;
    }
    public function getOffers() : Offer|Demand|null
    {
        return $this->offers;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('menuAddOn' => $this->menuAddOn, 'nutrition' => $this->nutrition, 'suitableForDiet' => $this->suitableForDiet, 'itemOffered' => $this->itemOffered, 'offers' => $this->offers), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

