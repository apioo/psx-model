<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("The act of adding at a specific location in an ordered collection.")
 */
class InsertAction extends AddAction implements \JsonSerializable
{
    /**
     * @var Place|null
     */
    protected $toLocation;
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
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('toLocation' => $this->toLocation), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
