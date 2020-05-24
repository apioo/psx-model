<?php

declare(strict_types = 1);

namespace PSX\Model\OpenAPI;

/**
 * @Description("Adds metadata to a single tag that is used by the Operation Object. It is not mandatory to have a Tag Object per tag defined in the Operation Object instances.")
 * @Required({"name"})
 */
class Tag
{
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var ExternalDocs
     */
    protected $externalDocs;
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
     * @param ExternalDocs $externalDocs
     */
    public function setExternalDocs(?ExternalDocs $externalDocs)
    {
        $this->externalDocs = $externalDocs;
    }
    /**
     * @return ExternalDocs
     */
    public function getExternalDocs() : ?ExternalDocs
    {
        return $this->externalDocs;
    }
}
