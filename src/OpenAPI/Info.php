<?php

declare(strict_types = 1);

namespace PSX\Model\OpenAPI;

/**
 * @Description("The object provides metadata about the API. The metadata can be used by the clients if needed, and can be presented in editing or documentation generation tools for convenience.")
 * @Required({"title", "version"})
 */
class Info implements \JsonSerializable
{
    /**
     * @var string|null
     */
    protected $title;
    /**
     * @var string|null
     */
    protected $description;
    /**
     * @var string|null
     */
    protected $termsOfService;
    /**
     * @var Contact|null
     */
    protected $contact;
    /**
     * @var License|null
     */
    protected $license;
    /**
     * @var string|null
     */
    protected $version;
    /**
     * @param string|null $title
     */
    public function setTitle(?string $title) : void
    {
        $this->title = $title;
    }
    /**
     * @return string|null
     */
    public function getTitle() : ?string
    {
        return $this->title;
    }
    /**
     * @param string|null $description
     */
    public function setDescription(?string $description) : void
    {
        $this->description = $description;
    }
    /**
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * @param string|null $termsOfService
     */
    public function setTermsOfService(?string $termsOfService) : void
    {
        $this->termsOfService = $termsOfService;
    }
    /**
     * @return string|null
     */
    public function getTermsOfService() : ?string
    {
        return $this->termsOfService;
    }
    /**
     * @param Contact|null $contact
     */
    public function setContact(?Contact $contact) : void
    {
        $this->contact = $contact;
    }
    /**
     * @return Contact|null
     */
    public function getContact() : ?Contact
    {
        return $this->contact;
    }
    /**
     * @param License|null $license
     */
    public function setLicense(?License $license) : void
    {
        $this->license = $license;
    }
    /**
     * @return License|null
     */
    public function getLicense() : ?License
    {
        return $this->license;
    }
    /**
     * @param string|null $version
     */
    public function setVersion(?string $version) : void
    {
        $this->version = $version;
    }
    /**
     * @return string|null
     */
    public function getVersion() : ?string
    {
        return $this->version;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('title' => $this->title, 'description' => $this->description, 'termsOfService' => $this->termsOfService, 'contact' => $this->contact, 'license' => $this->license, 'version' => $this->version), static function ($value) : bool {
            return $value !== null;
        });
    }
}
