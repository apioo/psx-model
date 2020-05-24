<?php

declare(strict_types = 1);

namespace PSX\Model\OpenAPI;

/**
 * @Description("Describes a single request body.")
 * @Required({"content"})
 */
class RequestBody
{
    /**
     * @var string
     */
    protected $description;
    /**
     * @var MediaTypes
     */
    protected $content;
    /**
     * @var bool
     */
    protected $required;
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
     * @param MediaTypes $content
     */
    public function setContent(?MediaTypes $content)
    {
        $this->content = $content;
    }
    /**
     * @return MediaTypes
     */
    public function getContent() : ?MediaTypes
    {
        return $this->content;
    }
    /**
     * @param bool $required
     */
    public function setRequired(?bool $required)
    {
        $this->required = $required;
    }
    /**
     * @return bool
     */
    public function getRequired() : ?bool
    {
        return $this->required;
    }
}
