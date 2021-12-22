<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A house is a building or structure that has the ability to be occupied for habitation by humans or other creatures (Source: Wikipedia, the free encyclopedia, see <a href="http://en.wikipedia.org/wiki/House">http://en.wikipedia.org/wiki/House</a>).')]
class House extends Accommodation implements \JsonSerializable
{
    protected float|QuantitativeValue|null $numberOfRooms = null;
    public function setNumberOfRooms(float|QuantitativeValue|null $numberOfRooms) : void
    {
        $this->numberOfRooms = $numberOfRooms;
    }
    public function getNumberOfRooms() : float|QuantitativeValue|null
    {
        return $this->numberOfRooms;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('numberOfRooms' => $this->numberOfRooms), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

