<?php

declare(strict_types = 1);

namespace PSX\Model\ActivityStream;


class Collection extends ObjectType
{
    /**
     * @var int
     */
    protected $totalItems;
    /**
     * @var array<Activity>
     */
    protected $items;
    /**
     * @var string
     */
    protected $url;
    /**
     * @param int $totalItems
     */
    public function setTotalItems(?int $totalItems)
    {
        $this->totalItems = $totalItems;
    }
    /**
     * @return int
     */
    public function getTotalItems() : ?int
    {
        return $this->totalItems;
    }
    /**
     * @param array<Activity> $items
     */
    public function setItems(?array $items)
    {
        $this->items = $items;
    }
    /**
     * @return array<Activity>
     */
    public function getItems() : ?array
    {
        return $this->items;
    }
    /**
     * @param string $url
     */
    public function setUrl(?string $url)
    {
        $this->url = $url;
    }
    /**
     * @return string
     */
    public function getUrl() : ?string
    {
        return $this->url;
    }
}
