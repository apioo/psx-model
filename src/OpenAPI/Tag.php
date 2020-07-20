<?php

declare(strict_types = 1);

namespace PSX\Model\OpenAPI;

/**
 * @Description("Adds metadata to a single tag that is used by the Operation Object. It is not mandatory to have a Tag Object per tag defined in the Operation Object instances.")
 * @Required({"name"})
 */
class Tag implements \JsonSerializable
{
    /**
     * @var string|null
     */
    protected $name;
    /**
     * @var string|null
     */
    protected $description;
    /**
     * @var ExternalDocs|null
     */
    protected $externalDocs;
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
     * @param ExternalDocs|null $externalDocs
     */
    public function setExternalDocs(?ExternalDocs $externalDocs) : void
    {
        $this->externalDocs = $externalDocs;
    }
    /**
     * @return ExternalDocs|null
     */
    public function getExternalDocs() : ?ExternalDocs
    {
        return $this->externalDocs;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('name' => $this->name, 'description' => $this->description, 'externalDocs' => $this->externalDocs), static function ($value) : bool {
            return $value !== null;
        });
    }
}
