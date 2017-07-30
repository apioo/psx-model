<?php
/*
 * PSX is a open source PHP framework to develop RESTful APIs.
 * For the current version and informations visit <http://phpsx.org>
 *
 * Copyright 2010-2017 Christoph Kappestein <christoph.kappestein@gmail.com>
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

namespace PSX\Model\OpenAPI;

/**
 * @author  Christoph Kappestein <christoph.kappestein@gmail.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @link    http://phpsx.org
 * @Title("Info")
 * @Description("The object provides metadata about the API. The metadata can be used by the clients if needed, and can be presented in editing or documentation generation tools for convenience.")
 * @PatternProperties(pattern="^x-", property=@Schema(description="Any property starting with x- is valid."))
 * @AdditionalProperties(false)
 * @Required({"title", "version"})
 */
class Info extends \ArrayObject
{
    /**
     * @Key("title")
     * @Type("string")
     */
    protected $title;
    /**
     * @Key("description")
     * @Type("string")
     */
    protected $description;
    /**
     * @Key("termsOfService")
     * @Type("string")
     */
    protected $termsOfService;
    /**
     * @Key("contact")
     * @Ref("PSX\Model\OpenAPI\Contact")
     */
    protected $contact;
    /**
     * @Key("license")
     * @Ref("PSX\Model\OpenAPI\License")
     */
    protected $license;
    /**
     * @Key("version")
     * @Type("string")
     */
    protected $version;
    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function setTermsOfService($termsOfService)
    {
        $this->termsOfService = $termsOfService;
    }
    public function getTermsOfService()
    {
        return $this->termsOfService;
    }
    public function setContact($contact)
    {
        $this->contact = $contact;
    }
    public function getContact()
    {
        return $this->contact;
    }
    public function setLicense($license)
    {
        $this->license = $license;
    }
    public function getLicense()
    {
        return $this->license;
    }
    public function setVersion($version)
    {
        $this->version = $version;
    }
    public function getVersion()
    {
        return $this->version;
    }
}
