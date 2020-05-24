<?php
/*
 * PSX is a open source PHP framework to develop RESTful APIs.
 * For the current version and informations visit <http://phpsx.org>
 *
 * Copyright 2010-2018 Christoph Kappestein <christoph.kappestein@gmail.com>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace PSX\Model\ActivityStream;

/**
 * Address
 *
 * @author  Christoph Kappestein <christoph.kappestein@gmail.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @link    http://phpsx.org
 */
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

    public function setFormatted(string $formatted)
    {
        $this->formatted = $formatted;
    }

    public function getFormatted(): ?string
    {
        return $this->formatted;
    }

    public function setStreetAddress(string $streetAddress)
    {
        $this->streetAddress = $streetAddress;
    }

    public function getStreetAddress(): ?string
    {
        return $this->streetAddress;
    }

    public function setLocality(string $locality)
    {
        $this->locality = $locality;
    }

    public function getLocality(): ?string
    {
        return $this->locality;
    }

    public function setRegion(string $region)
    {
        $this->region = $region;
    }

    public function getRegion(): ?string
    {
        return $this->region;
    }

    public function setPostalCode(string $postalCode)
    {
        $this->postalCode = $postalCode;
    }

    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    public function setCountry(string $country)
    {
        $this->country = $country;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }
}
