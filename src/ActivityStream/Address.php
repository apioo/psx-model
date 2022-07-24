<?php

declare(strict_types = 1);

namespace PSX\Model\ActivityStream;


class Address implements \JsonSerializable
{
    protected ?string $formatted = null;
    protected ?string $streetAddress = null;
    protected ?string $locality = null;
    protected ?string $region = null;
    protected ?string $postalCode = null;
    protected ?string $country = null;
    public function setFormatted(?string $formatted) : void
    {
        $this->formatted = $formatted;
    }
    public function getFormatted() : ?string
    {
        return $this->formatted;
    }
    public function setStreetAddress(?string $streetAddress) : void
    {
        $this->streetAddress = $streetAddress;
    }
    public function getStreetAddress() : ?string
    {
        return $this->streetAddress;
    }
    public function setLocality(?string $locality) : void
    {
        $this->locality = $locality;
    }
    public function getLocality() : ?string
    {
        return $this->locality;
    }
    public function setRegion(?string $region) : void
    {
        $this->region = $region;
    }
    public function getRegion() : ?string
    {
        return $this->region;
    }
    public function setPostalCode(?string $postalCode) : void
    {
        $this->postalCode = $postalCode;
    }
    public function getPostalCode() : ?string
    {
        return $this->postalCode;
    }
    public function setCountry(?string $country) : void
    {
        $this->country = $country;
    }
    public function getCountry() : ?string
    {
        return $this->country;
    }
    public function jsonSerialize() : object
    {
        return (object) array_filter(array('formatted' => $this->formatted, 'streetAddress' => $this->streetAddress, 'locality' => $this->locality, 'region' => $this->region, 'postalCode' => $this->postalCode, 'country' => $this->country), static function ($value) : bool {
            return $value !== null;
        });
    }
}

