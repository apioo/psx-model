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

namespace PSX\Model\Swagger;

/**
 * Info
 *
 * @author  Christoph Kappestein <christoph.kappestein@gmail.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @link    http://phpsx.org
 * @Description("General information about the API.")
 * @AdditionalProperties(false)
 * @Required({"version", "title"})
 */
class Info
{
    /**
     * @Key("title")
     * @Description("A unique and precise title of the API.")
     * @Type("string")
     */
    protected $title;
    
    /**
     * @Key("version")
     * @Description("A semantic version number of the API.")
     * @Type("string")
     */
    protected $version;
    
    /**
     * @Key("description")
     * @Description("A longer description of the API. Should be different from the title.  GitHub Flavored Markdown is allowed.")
     * @Type("string")
     */
    protected $description;
    
    /**
     * @Key("termsOfService")
     * @Description("The terms of service for the API.")
     * @Type("string")
     */
    protected $termsOfService;
    
    /**
     * @Key("contact")
     * @Ref("PSX\Model\Swagger\Contact")
     */
    protected $contact;
    
    /**
     * @Key("license")
     * @Ref("PSX\Model\Swagger\License")
     */
    protected $license;
    
    public function setTitle($title)
    {
        $this->title = $title;
    }
    
    public function getTitle()
    {
        return $this->title;
    }
    
    public function setVersion($version)
    {
        $this->version = $version;
    }
    
    public function getVersion()
    {
        return $this->version;
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
    
    public function setContact(Contact $contact)
    {
        $this->contact = $contact;
    }
    
    public function getContact()
    {
        return $this->contact;
    }
    
    public function setLicense(License $license)
    {
        $this->license = $license;
    }
    
    public function getLicense()
    {
        return $this->license;
    }
}
