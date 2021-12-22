<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('An airport.')]
class Airport extends CivicStructure implements \JsonSerializable
{
    protected ?string $iataCode = null;
    protected ?string $icaoCode = null;
    public function setIataCode(?string $iataCode) : void
    {
        $this->iataCode = $iataCode;
    }
    public function getIataCode() : ?string
    {
        return $this->iataCode;
    }
    public function setIcaoCode(?string $icaoCode) : void
    {
        $this->icaoCode = $icaoCode;
    }
    public function getIcaoCode() : ?string
    {
        return $this->icaoCode;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('iataCode' => $this->iataCode, 'icaoCode' => $this->icaoCode), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

