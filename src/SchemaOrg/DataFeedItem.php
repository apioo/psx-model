<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A single item within a larger data feed.")
 */
class DataFeedItem extends Intangible implements \JsonSerializable
{
    /**
     * @var \PSX\DateTime\Date|\DateTime|null
     */
    protected $dateModified;
    /**
     * @var \PSX\DateTime\Date|\DateTime|null
     */
    protected $dateCreated;
    /**
     * @var Thing|null
     */
    protected $item;
    /**
     * @var \DateTime|\PSX\DateTime\Date|null
     */
    protected $dateDeleted;
    /**
     * @param \PSX\DateTime\Date|\DateTime|null $dateModified
     */
    public function setDateModified($dateModified) : void
    {
        $this->dateModified = $dateModified;
    }
    /**
     * @return \PSX\DateTime\Date|\DateTime|null
     */
    public function getDateModified()
    {
        return $this->dateModified;
    }
    /**
     * @param \PSX\DateTime\Date|\DateTime|null $dateCreated
     */
    public function setDateCreated($dateCreated) : void
    {
        $this->dateCreated = $dateCreated;
    }
    /**
     * @return \PSX\DateTime\Date|\DateTime|null
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
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
     * @param \DateTime|\PSX\DateTime\Date|null $dateDeleted
     */
    public function setDateDeleted($dateDeleted) : void
    {
        $this->dateDeleted = $dateDeleted;
    }
    /**
     * @return \DateTime|\PSX\DateTime\Date|null
     */
    public function getDateDeleted()
    {
        return $this->dateDeleted;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('dateModified' => $this->dateModified, 'dateCreated' => $this->dateCreated, 'item' => $this->item, 'dateDeleted' => $this->dateDeleted), static function ($value) : bool {
            return $value !== null;
        });
    }
}
