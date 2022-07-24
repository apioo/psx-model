<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('Intended audience for an item, i.e. the group for whom the item was created.')]
class Audience extends Intangible implements \JsonSerializable
{
    protected ?AdministrativeArea $geographicArea = null;
    protected ?string $audienceType = null;
    public function setGeographicArea(?AdministrativeArea $geographicArea) : void
    {
        $this->geographicArea = $geographicArea;
    }
    public function getGeographicArea() : ?AdministrativeArea
    {
        return $this->geographicArea;
    }
    public function setAudienceType(?string $audienceType) : void
    {
        $this->audienceType = $audienceType;
    }
    public function getAudienceType() : ?string
    {
        return $this->audienceType;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('geographicArea' => $this->geographicArea, 'audienceType' => $this->audienceType), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

