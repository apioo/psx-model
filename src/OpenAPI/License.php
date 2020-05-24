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
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $url;
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
}
