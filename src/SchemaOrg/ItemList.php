<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A list of items of any sort&#x2014;for example, Top 10 Movies About Weathermen, or Top 100 Party Songs. Not to be confused with HTML lists, which are often used only for formatting.')]
class ItemList extends Intangible implements \JsonSerializable
{
    protected Thing|string|ListItem|null $itemListElement = null;
    protected ?int $numberOfItems = null;
    protected string|ItemListOrderType|null $itemListOrder = null;
    public function setItemListElement(Thing|string|ListItem|null $itemListElement) : void
    {
        $this->itemListElement = $itemListElement;
    }
    public function getItemListElement() : Thing|string|ListItem|null
    {
        return $this->itemListElement;
    }
    public function setNumberOfItems(?int $numberOfItems) : void
    {
        $this->numberOfItems = $numberOfItems;
    }
    public function getNumberOfItems() : ?int
    {
        return $this->numberOfItems;
    }
    public function setItemListOrder(string|ItemListOrderType|null $itemListOrder) : void
    {
        $this->itemListOrder = $itemListOrder;
    }
    public function getItemListOrder() : string|ItemListOrderType|null
    {
        return $this->itemListOrder;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('itemListElement' => $this->itemListElement, 'numberOfItems' => $this->numberOfItems, 'itemListOrder' => $this->itemListOrder), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

