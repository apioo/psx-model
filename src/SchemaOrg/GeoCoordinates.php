<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("The geographic coordinates of a place or event.")
 */
class GeoCoordinates extends StructuredValue implements \JsonSerializable
{
    /**
     * @var string|Country|null
     */
    protected $addressCountry;
    /**
     * @var string|float|null
     */
    protected $longitude;
    /**
     * @var string|null
     */
    protected $postalCode;
    /**
     * @var float|string|null
     */
    protected $elevation;
    /**
     * @var string|float|null
     */
    protected $latitude;
    /**
     * @var string|PostalAddress|null
     */
    protected $address;
    /**
     * @param string|Country|null $addressCountry
     */
    public function setAddressCountry($addressCountry) : void
    {
        $this->addressCountry = $addressCountry;
    }
    /**
     * @return string|Country|null
     */
    public function getAddressCountry()
    {
        return $this->addressCountry;
    }
    /**
     * @param string|float|null $longitude
     */
    public function setLongitude($longitude) : void
    {
        $this->longitude = $longitude;
    }
    /**
     * @return string|float|null
     */
    public function getLongitude()
    {
        return $this->longitude;
    }
    /**
     * @param string|null $postalCode
     */
    public function setPostalCode(?string $postalCode) : void
    {
        $this->postalCode = $postalCode;
    }
    /**
     * @return string|null
     */
    public function getPostalCode() : ?string
    {
        return $this->postalCode;
    }
    /**
     * @param float|string|null $elevation
     */
    public function setElevation($elevation) : void
    {
        $this->elevation = $elevation;
    }
    /**
     * @return float|string|null
     */
    public function getElevation()
    {
        return $this->elevation;
    }
    /**
     * @param string|float|null $latitude
     */
    public function setLatitude($latitude) : void
    {
        $this->latitude = $latitude;
    }
    /**
     * @return string|float|null
     */
    public function getLatitude()
    {
        return $this->latitude;
    }
    /**
     * @param string|PostalAddress|null $address
     */
    public function setAddress($address) : void
    {
        $this->address = $address;
    }
    /**
     * @return string|PostalAddress|null
     */
    public function getAddress()
    {
        return $this->address;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('addressCountry' => $this->addressCountry, 'longitude' => $this->longitude, 'postalCode' => $this->postalCode, 'elevation' => $this->elevation, 'latitude' => $this->latitude, 'address' => $this->address), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
