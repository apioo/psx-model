<?php

declare(strict_types = 1);

namespace PSX\Model\ActivityStream;


class Position implements \JsonSerializable
{
    protected ?float $altitude = null;
    protected ?float $latitude = null;
    protected ?float $longitude = null;
    public function setAltitude(?float $altitude) : void
    {
        $this->altitude = $altitude;
    }
    public function getAltitude() : ?float
    {
        return $this->altitude;
    }
    public function setLatitude(?float $latitude) : void
    {
        $this->latitude = $latitude;
    }
    public function getLatitude() : ?float
    {
        return $this->latitude;
    }
    public function setLongitude(?float $longitude) : void
    {
        $this->longitude = $longitude;
    }
    public function getLongitude() : ?float
    {
        return $this->longitude;
    }
    public function jsonSerialize() : object
    {
        return (object) array_filter(array('altitude' => $this->altitude, 'latitude' => $this->latitude, 'longitude' => $this->longitude), static function ($value) : bool {
            return $value !== null;
        });
    }
}

