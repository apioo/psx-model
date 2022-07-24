<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A single item within a larger data feed.')]
class DataFeedItem extends Intangible implements \JsonSerializable
{
    protected \PSX\DateTime\Date|\DateTime|null $dateModified = null;
    protected \PSX\DateTime\Date|\DateTime|null $dateCreated = null;
    protected ?Thing $item = null;
    protected \DateTime|\PSX\DateTime\Date|null $dateDeleted = null;
    public function setDateModified(\PSX\DateTime\Date|\DateTime|null $dateModified) : void
    {
        $this->dateModified = $dateModified;
    }
    public function getDateModified() : \PSX\DateTime\Date|\DateTime|null
    {
        return $this->dateModified;
    }
    public function setDateCreated(\PSX\DateTime\Date|\DateTime|null $dateCreated) : void
    {
        $this->dateCreated = $dateCreated;
    }
    public function getDateCreated() : \PSX\DateTime\Date|\DateTime|null
    {
        return $this->dateCreated;
    }
    public function setItem(?Thing $item) : void
    {
        $this->item = $item;
    }
    public function getItem() : ?Thing
    {
        return $this->item;
    }
    public function setDateDeleted(\DateTime|\PSX\DateTime\Date|null $dateDeleted) : void
    {
        $this->dateDeleted = $dateDeleted;
    }
    public function getDateDeleted() : \DateTime|\PSX\DateTime\Date|null
    {
        return $this->dateDeleted;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('dateModified' => $this->dateModified, 'dateCreated' => $this->dateCreated, 'item' => $this->item, 'dateDeleted' => $this->dateDeleted), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

