<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A subclass of Role used to describe roles within organizations.')]
class OrganizationRole extends Role implements \JsonSerializable
{
    protected ?float $numberedPosition = null;
    public function setNumberedPosition(?float $numberedPosition) : void
    {
        $this->numberedPosition = $numberedPosition;
    }
    public function getNumberedPosition() : ?float
    {
        return $this->numberedPosition;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('numberedPosition' => $this->numberedPosition), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

