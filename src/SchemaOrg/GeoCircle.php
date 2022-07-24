<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A GeoCircle is a GeoShape representing a circular geographic area. As it is a GeoShape
          it provides the simple textual property \'circle\', but also allows the combination of postalCode alongside geoRadius.
          The center of the circle can be indicated via the \'geoMidpoint\' property, or more approximately using \'address\', \'postalCode\'.')]
class GeoCircle extends GeoShape implements \JsonSerializable
{
    protected ?GeoCoordinates $geoMidpoint = null;
    protected float|string|Distance|null $geoRadius = null;
    public function setGeoMidpoint(?GeoCoordinates $geoMidpoint) : void
    {
        $this->geoMidpoint = $geoMidpoint;
    }
    public function getGeoMidpoint() : ?GeoCoordinates
    {
        return $this->geoMidpoint;
    }
    public function setGeoRadius(float|string|Distance|null $geoRadius) : void
    {
        $this->geoRadius = $geoRadius;
    }
    public function getGeoRadius() : float|string|Distance|null
    {
        return $this->geoRadius;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('geoMidpoint' => $this->geoMidpoint, 'geoRadius' => $this->geoRadius), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

