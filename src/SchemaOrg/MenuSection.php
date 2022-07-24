<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A sub-grouping of food or drink items in a menu. E.g. courses (such as \'Dinner\', \'Breakfast\', etc.), specific type of dishes (such as \'Meat\', \'Vegan\', \'Drinks\', etc.), or some other classification made by the menu provider.')]
class MenuSection extends CreativeWork implements \JsonSerializable
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
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('hasMenuSection' => $this->hasMenuSection, 'hasMenuItem' => $this->hasMenuItem), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

