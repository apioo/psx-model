<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A public structure, such as a town hall or concert hall.')]
class CivicStructure extends Place implements \JsonSerializable
{
    protected ?string $openingHours = null;
    public function setOpeningHours(?string $openingHours) : void
    {
        $this->openingHours = $openingHours;
    }
    public function getOpeningHours() : ?string
    {
        return $this->openingHours;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('openingHours' => $this->openingHours), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

