<?php

declare(strict_types = 1);

namespace PSX\Model\ActivityStream;


class Address
{
    /**
     * @var string
     */
    protected $formatted;
    /**
     * @var string
     */
    protected $streetAddress;
    /**
     * @var string
     */
    protected $locality;
    /**
     * @var string
     */
    protected $region;
    /**
     * @var string
     */
    protected $postalCode;
    /**
     * @var string
     */
    protected $country;
    /**
     * @param string $formatted
     */
    public function setFormatted(?string $formatted)
    {
        $this->formatted = $formatted;
    }
    /**
     * @return string
     */
    public function getFormatted() : ?string
    {
        return $this->formatted;
    }
    /**
     * @param string $streetAddress
     */
    public function setStreetAddress(?string $streetAddress)
    {
        $this->streetAddress = $streetAddress;
    }
    /**
     * @return string
     */
    public function getStreetAddress() : ?string
    {
        return $this->streetAddress;
    }
    /**
     * @param string $locality
     */
    public function setLocality(?string $locality)
    {
        $this->locality = $locality;
    }
    /**
     * @return string
     */
    public function getLocality() : ?string
    {
        return $this->locality;
    }
    /**
     * @param string $region
     */
    public function setRegion(?string $region)
    {
        $this->region = $region;
    }
    /**
     * @return string
     */
    public function getRegion() : ?string
    {
        return $this->region;
    }
    /**
     * @param string $postalCode
     */
    public function setPostalCode(?string $postalCode)
    {
        $this->postalCode = $postalCode;
    }
    /**
     * @return string
     */
    public function getPostalCode() : ?string
    {
        return $this->postalCode;
    }
    /**
     * @param string $country
     */
    public function setCountry(?string $country)
    {
        $this->country = $country;
    }
    /**
     * @return string
     */
    public function getCountry() : ?string
    {
        return $this->country;
    }
}
