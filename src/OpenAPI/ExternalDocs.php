<?php

declare(strict_types = 1);

namespace PSX\Model\OpenAPI;

/**
 * @Description("Allows referencing an external resource for extended documentation.")
 * @Required({"url"})
 */
class ExternalDocs implements \JsonSerializable
{
    /**
     * @var string|null
     */
    protected $description;
    /**
     * @var string|null
     */
    protected $url;
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
    public function jsonSerialize()
    {
        return array_filter(array('description' => $this->description, 'url' => $this->url), static function ($value) : bool {
            return $value !== null;
        });
    }
}
