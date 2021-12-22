<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The act of traveling from an fromLocation to a destination by a specified mode of transport, optionally with participants.')]
class TravelAction extends MoveAction implements \JsonSerializable
{
    protected ?Distance $distance = null;
    public function setDistance(?Distance $distance) : void
    {
        $this->distance = $distance;
    }
    public function getDistance() : ?Distance
    {
        return $this->distance;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('distance' => $this->distance), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

