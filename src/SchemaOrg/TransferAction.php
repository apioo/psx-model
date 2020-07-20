<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("The act of transferring/moving (abstract or concrete) animate or inanimate objects from one place to another.")
 */
class TransferAction extends Action implements \JsonSerializable
{
    /**
     * @var Place|null
     */
    protected $fromLocation;
    /**
     * @var Place|null
     */
    protected $toLocation;
    /**
     * @param Place|null $fromLocation
     */
    public function setFromLocation(?Place $fromLocation) : void
    {
        $this->fromLocation = $fromLocation;
    }
    /**
     * @return Place|null
     */
    public function getFromLocation() : ?Place
    {
        return $this->fromLocation;
    }
    /**
     * @param Place|null $toLocation
     */
    public function setToLocation(?Place $toLocation) : void
    {
        $this->toLocation = $toLocation;
    }
    /**
     * @return Place|null
     */
    public function getToLocation() : ?Place
    {
        return $this->toLocation;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('fromLocation' => $this->fromLocation, 'toLocation' => $this->toLocation), static function ($value) : bool {
            return $value !== null;
        });
    }
}
