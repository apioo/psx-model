<?php

declare(strict_types = 1);

namespace PSX\Model\ActivityStream;


class Position implements \JsonSerializable
{
    /**
     * @var float|null
     */
    protected $altitude;
    /**
     * @var float|null
     */
    protected $latitude;
    /**
     * @var float|null
     */
    protected $longitude;
    /**
     * @param float|null $altitude
     */
    public function setAltitude(?float $altitude) : void
    {
        $this->altitude = $altitude;
    }
    /**
     * @return float|null
     */
    public function getAltitude() : ?float
    {
        return $this->altitude;
    }
    /**
     * @param float|null $latitude
     */
    public function setLatitude(?float $latitude) : void
    {
        $this->latitude = $latitude;
    }
    /**
     * @return float|null
     */
    public function getLatitude() : ?float
    {
        return $this->latitude;
    }
    /**
     * @param float|null $longitude
     */
    public function setLongitude(?float $longitude) : void
    {
        $this->longitude = $longitude;
    }
    /**
     * @return float|null
     */
    public function getLongitude() : ?float
    {
        return $this->longitude;
    }
    public function jsonSerialize()
    {
        return array_filter(array('altitude' => $this->altitude, 'latitude' => $this->latitude, 'longitude' => $this->longitude), static function ($value) : bool {
            return $value !== null;
        });
    }
}
