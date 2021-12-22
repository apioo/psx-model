<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A structured representation of food or drink items available from a FoodEstablishment.')]
class Menu extends CreativeWork implements \JsonSerializable
{
    protected ?MenuSection $hasMenuSection = null;
    protected ?MenuItem $hasMenuItem = null;
    public function setHasMenuSection(?MenuSection $hasMenuSection) : void
    {
        $this->hasMenuSection = $hasMenuSection;
    }
    public function getHasMenuSection() : ?MenuSection
    {
        return $this->hasMenuSection;
    }
    public function setHasMenuItem(?MenuItem $hasMenuItem) : void
    {
        $this->hasMenuItem = $hasMenuItem;
    }
    public function getHasMenuItem() : ?MenuItem
    {
        return $this->hasMenuItem;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('hasMenuSection' => $this->hasMenuSection, 'hasMenuItem' => $this->hasMenuItem), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

