<?php

declare(strict_types = 1);

namespace PSX\Model\ActivityStream;


class Collection extends ObjectType implements \JsonSerializable
{
    /**
     * @var int|null
     */
    protected $totalItems;
    /**
     * @var array<Activity>|null
     */
    protected $items;
    /**
     * @var string|null
     */
    protected $url;
    /**
     * @param int|null $totalItems
     */
    public function setTotalItems(?int $totalItems) : void
    {
        $this->totalItems = $totalItems;
    }
    /**
     * @return int|null
     */
    public function getTotalItems() : ?int
    {
        return $this->totalItems;
    }
    /**
     * @param array<Activity>|null $items
     */
    public function setItems(?array $items) : void
    {
        $this->items = $items;
    }
    /**
     * @return array<Activity>|null
     */
    public function getItems() : ?array
    {
        return $this->items;
    }
    /**
     * @param string|null $url
     */
    public function setUrl(?string $url) : void
    {
        $this->url = $url;
    }
    /**
     * @return string|null
     */
    public function getUrl() : ?string
    {
        return $this->url;
    }
    public function jsonSerialize()
    {
        return array_merge(parent::jsonSerialize(), array_filter(array('totalItems' => $this->totalItems, 'items' => $this->items, 'url' => $this->url), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
