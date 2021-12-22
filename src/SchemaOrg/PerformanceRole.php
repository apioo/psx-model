<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A PerformanceRole is a Role that some entity places with regard to a theatrical performance, e.g. in a Movie, TVSeries etc.')]
class PerformanceRole extends Role implements \JsonSerializable
{
    protected ?string $characterName = null;
    public function setCharacterName(?string $characterName) : void
    {
        $this->characterName = $characterName;
    }
    public function getCharacterName() : ?string
    {
        return $this->characterName;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('characterName' => $this->characterName), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

