<?php

declare(strict_types = 1);

namespace PSX\Model\OpenAPI;

/**
 * @Description("Contact information for the exposed API.")
 */
class Contact
{
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $url;
    /**
     * @var string
     */
    protected $email;
    /**
     * @param string $name
     */
    public function setName(?string $name)
    {
        $this->name = $name;
    }
    /**
     * @return string
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * @param string $url
     */
    public function setUrl(?string $url)
    {
        $this->url = $url;
    }
    /**
     * @return string
     */
    public function getUrl() : ?string
    {
        return $this->url;
    }
    /**
     * @param string $email
     */
    public function setEmail(?string $email)
    {
        $this->email = $email;
    }
    /**
     * @return string
     */
    public function getEmail() : ?string
    {
        return $this->email;
    }
}
