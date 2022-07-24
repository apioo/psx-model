<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('Web applications.')]
class WebApplication extends SoftwareApplication implements \JsonSerializable
{
    protected ?string $browserRequirements = null;
    public function setBrowserRequirements(?string $browserRequirements) : void
    {
        $this->browserRequirements = $browserRequirements;
    }
    public function getBrowserRequirements() : ?string
    {
        return $this->browserRequirements;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('browserRequirements' => $this->browserRequirements), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

