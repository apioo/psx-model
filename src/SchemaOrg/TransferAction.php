<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The act of transferring/moving (abstract or concrete) animate or inanimate objects from one place to another.')]
class TransferAction extends Action implements \JsonSerializable
{
    protected ?Place $fromLocation = null;
    protected ?Place $toLocation = null;
    public function setFromLocation(?Place $fromLocation) : void
    {
        $this->fromLocation = $fromLocation;
    }
    public function getFromLocation() : ?Place
    {
        return $this->fromLocation;
    }
    public function setToLocation(?Place $toLocation) : void
    {
        $this->toLocation = $toLocation;
    }
    public function getToLocation() : ?Place
    {
        return $this->toLocation;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('fromLocation' => $this->fromLocation, 'toLocation' => $this->toLocation), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

