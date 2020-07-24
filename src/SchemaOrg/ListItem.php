<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("An list item, e.g. a step in a checklist or how-to description.")
 */
class ListItem extends Intangible implements \JsonSerializable
{
    /**
     * @var int|string|null
     */
    protected $position;
    /**
     * @var ListItem|null
     */
    protected $previousItem;
    /**
     * @var Thing|null
     */
    protected $item;
    /**
     * @var ListItem|null
     */
    protected $nextItem;
    /**
     * @param int|string|null $position
     */
    public function setPosition($position) : void
    {
        $this->position = $position;
    }
    /**
     * @return int|string|null
     */
    public function getPosition()
    {
        return $this->position;
    }
    /**
     * @param ListItem|null $previousItem
     */
    public function setPreviousItem(?ListItem $previousItem) : void
    {
        $this->previousItem = $previousItem;
    }
    /**
     * @return ListItem|null
     */
    public function getPreviousItem() : ?ListItem
    {
        return $this->previousItem;
    }
    /**
     * @param Thing|null $item
     */
    public function setItem(?Thing $item) : void
    {
        $this->item = $item;
    }
    /**
     * @return Thing|null
     */
    public function getItem() : ?Thing
    {
        return $this->item;
    }
    /**
     * @param ListItem|null $nextItem
     */
    public function setNextItem(?ListItem $nextItem) : void
    {
        $this->nextItem = $nextItem;
    }
    /**
     * @return ListItem|null
     */
    public function getNextItem() : ?ListItem
    {
        return $this->nextItem;
    }
    public function jsonSerialize()
    {
        return array_merge(parent::jsonSerialize(), array_filter(array('position' => $this->position, 'previousItem' => $this->previousItem, 'item' => $this->item, 'nextItem' => $this->nextItem), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
