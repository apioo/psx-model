<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A structured representation of food or drink items available from a FoodEstablishment.")
 */
class Menu extends CreativeWork implements \JsonSerializable
{
    /**
     * @var MenuSection|null
     */
    protected $hasMenuSection;
    /**
     * @var MenuItem|null
     */
    protected $hasMenuItem;
    /**
     * @param MenuSection|null $hasMenuSection
     */
    public function setHasMenuSection(?MenuSection $hasMenuSection) : void
    {
        $this->hasMenuSection = $hasMenuSection;
    }
    /**
     * @return MenuSection|null
     */
    public function getHasMenuSection() : ?MenuSection
    {
        return $this->hasMenuSection;
    }
    /**
     * @param MenuItem|null $hasMenuItem
     */
    public function setHasMenuItem(?MenuItem $hasMenuItem) : void
    {
        $this->hasMenuItem = $hasMenuItem;
    }
    /**
     * @return MenuItem|null
     */
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
