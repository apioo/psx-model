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
     * @var string|null
     */
    protected $description;
    /**
     * @var MediaTypes|null
     */
    protected $content;
    /**
     * @var bool|null
     */
    protected $required;
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
     * @param MediaTypes|null $content
     */
    public function setContent(?MediaTypes $content) : void
    {
        $this->content = $content;
    }
    /**
     * @return MediaTypes|null
     */
    public function getContent() : ?MediaTypes
    {
        return $this->content;
    }
    /**
     * @param bool|null $required
     */
    public function setRequired(?bool $required) : void
    {
        $this->required = $required;
    }
    /**
     * @return bool|null
     */
    public function getRequired() : ?bool
    {
        return $this->required;
    }
}
