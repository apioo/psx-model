<?php

declare(strict_types = 1);

namespace PSX\Model\ActivityStream;


class Position
{
    /**
     * @var float
     */
    protected $altitude;
    /**
     * @var float
     */
    protected $latitude;
    /**
     * @var float
     */
    protected $longitude;
    /**
     * @param float $altitude
     */
    public function setAltitude(?float $altitude)
    {
        $this->altitude = $altitude;
    }
    /**
     * @return float
     */
    public function getAltitude() : ?float
    {
        return $this->altitude;
    }
    /**
     * @param float $latitude
     */
    public function setLatitude(?float $latitude)
    {
        $this->latitude = $latitude;
    }
    /**
     * @return float
     */
    public function getLatitude() : ?float
    {
        return $this->latitude;
    }
    /**
     * @param float $longitude
     */
    public function setLongitude(?float $longitude)
    {
        $this->longitude = $longitude;
    }
    /**
     * @return float
     */
    public function getLongitude() : ?float
    {
        return $this->longitude;
    }
}
