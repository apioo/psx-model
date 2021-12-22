<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A movie theater.')]
class MovieTheater extends CivicStructure implements \JsonSerializable
{
    protected ?float $screenCount = null;
    public function setScreenCount(?float $screenCount) : void
    {
        $this->screenCount = $screenCount;
    }
    public function getScreenCount() : ?float
    {
        return $this->screenCount;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('screenCount' => $this->screenCount), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

