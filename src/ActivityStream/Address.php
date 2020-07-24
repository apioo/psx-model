<?php

declare(strict_types = 1);

namespace PSX\Model\ActivityStream;


class Address implements \JsonSerializable
{
    /**
     * @var string|null
     */
    protected $formatted;
    /**
     * @var string|null
     */
    protected $streetAddress;
    /**
     * @var string|null
     */
    protected $locality;
    /**
     * @var string|null
     */
    protected $region;
    /**
     * @var string|null
     */
    protected $postalCode;
    /**
     * @var string|null
     */
    protected $country;
    /**
     * @param string|null $formatted
     */
    public function setFormatted(?string $formatted) : void
    {
        $this->formatted = $formatted;
    }
    /**
     * @return string|null
     */
    public function getFormatted() : ?string
    {
        return $this->formatted;
    }
    /**
     * @param string|null $streetAddress
     */
    public function setStreetAddress(?string $streetAddress) : void
    {
        $this->streetAddress = $streetAddress;
    }
    /**
     * @return string|null
     */
    public function getStreetAddress() : ?string
    {
        return $this->streetAddress;
    }
    /**
     * @param string|null $locality
     */
    public function setLocality(?string $locality) : void
    {
        $this->locality = $locality;
    }
    /**
     * @return string|null
     */
    public function getLocality() : ?string
    {
        return $this->locality;
    }
    /**
     * @param string|null $region
     */
    public function setRegion(?string $region) : void
    {
        $this->region = $region;
    }
    /**
     * @return string|null
     */
    public function getRegion() : ?string
    {
        return $this->region;
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
     * @param string|null $country
     */
    public function setCountry(?string $country) : void
    {
        $this->country = $country;
    }
    /**
     * @return string|null
     */
    public function getCountry() : ?string
    {
        return $this->country;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('formatted' => $this->formatted, 'streetAddress' => $this->streetAddress, 'locality' => $this->locality, 'region' => $this->region, 'postalCode' => $this->postalCode, 'country' => $this->country), static function ($value) : bool {
            return $value !== null;
        });
    }
}
