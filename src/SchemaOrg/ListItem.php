<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('An list item, e.g. a step in a checklist or how-to description.')]
class ListItem extends Intangible implements \JsonSerializable
{
    protected int|string|null $position = null;
    protected ?ListItem $previousItem = null;
    protected ?Thing $item = null;
    protected ?ListItem $nextItem = null;
    public function setPosition(int|string|null $position) : void
    {
        $this->position = $position;
    }
    public function getPosition() : int|string|null
    {
        return $this->position;
    }
    public function setPreviousItem(?ListItem $previousItem) : void
    {
        $this->previousItem = $previousItem;
    }
    public function getPreviousItem() : ?ListItem
    {
        return $this->previousItem;
    }
    public function setItem(?Thing $item) : void
    {
        $this->item = $item;
    }
    public function getItem() : ?Thing
    {
        return $this->item;
    }
    public function setNextItem(?ListItem $nextItem) : void
    {
        $this->nextItem = $nextItem;
    }
    public function getNextItem() : ?ListItem
    {
        return $this->nextItem;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('position' => $this->position, 'previousItem' => $this->previousItem, 'item' => $this->item, 'nextItem' => $this->nextItem), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

