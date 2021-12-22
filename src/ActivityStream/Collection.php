<?php

declare(strict_types = 1);

namespace PSX\Model\ActivityStream;


class Collection extends ObjectType implements \JsonSerializable
{
    protected ?int $totalItems = null;
    /**
     * @var array<Activity>|null
     */
    protected ?array $items = null;
    protected ?string $url = null;
    public function setTotalItems(?int $totalItems) : void
    {
        $this->totalItems = $totalItems;
    }
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
    public function getItems() : ?array
    {
        return $this->items;
    }
    public function setUrl(?string $url) : void
    {
        $this->url = $url;
    }
    public function getUrl() : ?string
    {
        return $this->url;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('totalItems' => $this->totalItems, 'items' => $this->items, 'url' => $this->url), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

