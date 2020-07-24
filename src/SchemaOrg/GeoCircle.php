<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
* @Description("A GeoCircle is a GeoShape representing a circular geographic area. As it is a GeoShape
         it provides the simple textual property 'circle', but also allows the combination of postalCode alongside geoRadius.
         The center of the circle can be indicated via the 'geoMidpoint' property, or more approximately using 'address', 'postalCode'.")
*/
class GeoCircle extends GeoShape implements \JsonSerializable
{
    /**
     * @var GeoCoordinates|null
     */
    protected $geoMidpoint;
    /**
     * @var float|string|Distance|null
     */
    protected $geoRadius;
    /**
     * @param GeoCoordinates|null $geoMidpoint
     */
    public function setGeoMidpoint(?GeoCoordinates $geoMidpoint) : void
    {
        $this->geoMidpoint = $geoMidpoint;
    }
    /**
     * @return GeoCoordinates|null
     */
    public function getGeoMidpoint() : ?GeoCoordinates
    {
        return $this->geoMidpoint;
    }
    /**
     * @param float|string|Distance|null $geoRadius
     */
    public function setGeoRadius($geoRadius) : void
    {
        $this->geoRadius = $geoRadius;
    }
    /**
     * @return float|string|Distance|null
     */
    public function getGeoRadius()
    {
        return $this->geoRadius;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('geoMidpoint' => $this->geoMidpoint, 'geoRadius' => $this->geoRadius), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
