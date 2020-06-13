<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("The act of adding at a specific location in an ordered collection.")
 */
class InsertAction extends AddAction
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
}
