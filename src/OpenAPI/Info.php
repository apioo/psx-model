<?php

declare(strict_types = 1);

namespace PSX\Model\OpenAPI;

/**
 * @Description("The object provides metadata about the API. The metadata can be used by the clients if needed, and can be presented in editing or documentation generation tools for convenience.")
 * @Required({"title", "version"})
 */
class Info
{
    /**
     * @var string
     */
    protected $title;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var string
     */
    protected $termsOfService;
    /**
     * @var Contact
     */
    protected $contact;
    /**
     * @var License
     */
    protected $license;
    /**
     * @var string
     */
    protected $version;
    /**
     * @param string $title
     */
    public function setTitle(?string $title)
    {
        $this->title = $title;
    }
    /**
     * @return string
     */
    public function getTitle() : ?string
    {
        return $this->title;
    }
    /**
     * @param string $description
     */
    public function setDescription(?string $description)
    {
        $this->description = $description;
    }
    /**
     * @return string
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * @param string $termsOfService
     */
    public function setTermsOfService(?string $termsOfService)
    {
        $this->termsOfService = $termsOfService;
    }
    /**
     * @return string
     */
    public function getTermsOfService() : ?string
    {
        return $this->termsOfService;
    }
    /**
     * @param Contact $contact
     */
    public function setContact(?Contact $contact)
    {
        $this->contact = $contact;
    }
    /**
     * @return Contact
     */
    public function getContact() : ?Contact
    {
        return $this->contact;
    }
    /**
     * @param License $license
     */
    public function setLicense(?License $license)
    {
        $this->license = $license;
    }
    /**
     * @return License
     */
    public function getLicense() : ?License
    {
        return $this->license;
    }
    /**
     * @param string $version
     */
    public function setVersion(?string $version)
    {
        $this->version = $version;
    }
    /**
     * @return string
     */
    public function getVersion() : ?string
    {
        return $this->version;
    }
}
