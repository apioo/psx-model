<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A tourist attraction.  In principle any Thing can be a <a class="localLink" href="http://schema.org/TouristAttraction">TouristAttraction</a>, from a <a class="localLink" href="http://schema.org/Mountain">Mountain</a> and <a class="localLink" href="http://schema.org/LandmarksOrHistoricalBuildings">LandmarksOrHistoricalBuildings</a> to a <a class="localLink" href="http://schema.org/LocalBusiness">LocalBusiness</a>.  This Type can be used on its own to describe a general <a class="localLink" href="http://schema.org/TouristAttraction">TouristAttraction</a>, or be used as an <a class="localLink" href="http://schema.org/additionalType">additionalType</a> to add tourist attraction properties to any other type.  (See examples below)')]
class TouristAttraction extends Place implements \JsonSerializable
{
    protected string|Language|null $availableLanguage = null;
    protected string|Audience|null $touristType = null;
    public function setAvailableLanguage(string|Language|null $availableLanguage) : void
    {
        $this->availableLanguage = $availableLanguage;
    }
    public function getAvailableLanguage() : string|Language|null
    {
        return $this->availableLanguage;
    }
    public function setTouristType(string|Audience|null $touristType) : void
    {
        $this->touristType = $touristType;
    }
    public function getTouristType() : string|Audience|null
    {
        return $this->touristType;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('availableLanguage' => $this->availableLanguage, 'touristType' => $this->touristType), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

