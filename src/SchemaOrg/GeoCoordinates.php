<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The geographic coordinates of a place or event.')]
class GeoCoordinates extends StructuredValue implements \JsonSerializable
{
    protected string|Country|null $addressCountry = null;
    protected string|float|null $longitude = null;
    protected ?string $postalCode = null;
    protected float|string|null $elevation = null;
    protected string|float|null $latitude = null;
    protected string|PostalAddress|null $address = null;
    public function setAddressCountry(string|Country|null $addressCountry) : void
    {
        $this->addressCountry = $addressCountry;
    }
    public function getAddressCountry() : string|Country|null
    {
        return $this->addressCountry;
    }
    public function setLongitude(string|float|null $longitude) : void
    {
        $this->longitude = $longitude;
    }
    public function getLongitude() : string|float|null
    {
        return $this->longitude;
    }
    public function setPostalCode(?string $postalCode) : void
    {
        $this->postalCode = $postalCode;
    }
    public function getPostalCode() : ?string
    {
        return $this->postalCode;
    }
    public function setElevation(float|string|null $elevation) : void
    {
        $this->elevation = $elevation;
    }
    public function getElevation() : float|string|null
    {
        return $this->elevation;
    }
    public function setLatitude(string|float|null $latitude) : void
    {
        $this->latitude = $latitude;
    }
    public function getLatitude() : string|float|null
    {
        return $this->latitude;
    }
    public function setAddress(string|PostalAddress|null $address) : void
    {
        $this->address = $address;
    }
    public function getAddress() : string|PostalAddress|null
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

