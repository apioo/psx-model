<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A tourist attraction.  In principle any Thing can be a <a class=""localLink"" href=""http://schema.org/TouristAttraction"">TouristAttraction</a>, from a <a class=""localLink"" href=""http://schema.org/Mountain"">Mountain</a> and <a class=""localLink"" href=""http://schema.org/LandmarksOrHistoricalBuildings"">LandmarksOrHistoricalBuildings</a> to a <a class=""localLink"" href=""http://schema.org/LocalBusiness"">LocalBusiness</a>.  This Type can be used on its own to describe a general <a class=""localLink"" href=""http://schema.org/TouristAttraction"">TouristAttraction</a>, or be used as an <a class=""localLink"" href=""http://schema.org/additionalType"">additionalType</a> to add tourist attraction properties to any other type.  (See examples below)")
 */
class TouristAttraction extends Place
{
    /**
     * @var string|Language|null
     */
    protected $availableLanguage;
    /**
     * @var string|Audience|null
     */
    protected $touristType;
    /**
     * @param string|Language|null $availableLanguage
     */
    public function setAvailableLanguage($availableLanguage) : void
    {
        $this->availableLanguage = $availableLanguage;
    }
    /**
     * @return string|Language|null
     */
    public function getAvailableLanguage()
    {
        return $this->availableLanguage;
    }
    /**
     * @param string|Audience|null $touristType
     */
    public function setTouristType($touristType) : void
    {
        $this->touristType = $touristType;
    }
    /**
     * @return string|Audience|null
     */
    public function getTouristType()
    {
        return $this->touristType;
    }
}
