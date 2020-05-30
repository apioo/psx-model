<?php

declare(strict_types = 1);

namespace PSX\Model\OpenAPI;

/**
 * @Description("License information for the exposed API.")
 * @Required({"name"})
 */
class License
{
    /**
     * @var string|null
     */
    protected $name;
    /**
     * @var string|null
     */
    protected $url;
    /**
     * @param string|null $name
     */
    public function setName(?string $name) : void
    {
        $this->name = $name;
    }
    /**
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * @param string|null $url
     */
    public function setUrl(?string $url) : void
    {
        $this->url = $url;
    }
    /**
     * @return string|null
     */
    public function getUrl() : ?string
    {
        return $this->url;
    }
}
