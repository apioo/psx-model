<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A list of items of any sort&#x2014;for example, Top 10 Movies About Weathermen, or Top 100 Party Songs. Not to be confused with HTML lists, which are often used only for formatting.")
 */
class ItemList extends Intangible implements \JsonSerializable
{
    /**
     * @var Thing|string|ListItem|null
     */
    protected $itemListElement;
    /**
     * @var int|null
     */
    protected $numberOfItems;
    /**
     * @var string|ItemListOrderType|null
     */
    protected $itemListOrder;
    /**
     * @param Thing|string|ListItem|null $itemListElement
     */
    public function setItemListElement($itemListElement) : void
    {
        $this->itemListElement = $itemListElement;
    }
    /**
     * @return Thing|string|ListItem|null
     */
    public function getItemListElement()
    {
        return $this->itemListElement;
    }
    /**
     * @param int|null $numberOfItems
     */
    public function setNumberOfItems(?int $numberOfItems) : void
    {
        $this->numberOfItems = $numberOfItems;
    }
    /**
     * @return int|null
     */
    public function getNumberOfItems() : ?int
    {
        return $this->numberOfItems;
    }
    /**
     * @param string|ItemListOrderType|null $itemListOrder
     */
    public function setItemListOrder($itemListOrder) : void
    {
        $this->itemListOrder = $itemListOrder;
    }
    /**
     * @return string|ItemListOrderType|null
     */
    public function getItemListOrder()
    {
        return $this->itemListOrder;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('itemListElement' => $this->itemListElement, 'numberOfItems' => $this->numberOfItems, 'itemListOrder' => $this->itemListOrder), static function ($value) : bool {
            return $value !== null;
        });
    }
}
