<?php

declare(strict_types = 1);

namespace PSX\Model\OpenRPC;

use PSX\Schema\Attribute\Description;
use PSX\Schema\Attribute\Enum;
use PSX\Schema\Attribute\Required;

#[Description('Describes a single API operation on a path.')]
#[Required(array('name', 'params', 'result'))]
class Method implements \JsonSerializable
{
    protected ?string $name = null;
    /**
     * @var array<\PSX\Model\OpenAPI\Tag>|null
     */
    protected ?array $tags = null;
    protected ?string $summary = null;
    protected ?string $description = null;
    protected ?\PSX\Model\OpenAPI\ExternalDocs $externalDocs = null;
    /**
     * @var array<ContentDescriptor|\PSX\Model\OpenAPI\Reference>|null
     */
    protected ?array $params = null;
    protected ContentDescriptor|\PSX\Model\OpenAPI\Reference|null $result = null;
    protected ?bool $deprecated = null;
    /**
     * @var array<\PSX\Model\OpenAPI\Server>|null
     */
    protected ?array $servers = null;
    /**
     * @var array<Error|\PSX\Model\OpenAPI\Reference>|null
     */
    protected ?array $errors = null;
    /**
     * @var array<Link|\PSX\Model\OpenAPI\Reference>|null
     */
    protected ?array $links = null;
    #[Enum(array('by-name', 'by-position', 'either'))]
    protected ?string $paramStructure = null;
    /**
     * @var array<ExamplePairingObject>|null
     */
    protected ?array $examples = null;
    public function setName(?string $name) : void
    {
        $this->name = $name;
    }
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * @param array<\PSX\Model\OpenAPI\Tag>|null $tags
     */
    public function setTags(?array $tags) : void
    {
        $this->tags = $tags;
    }
    public function getTags() : ?array
    {
        return $this->tags;
    }
    public function setSummary(?string $summary) : void
    {
        $this->summary = $summary;
    }
    public function getSummary() : ?string
    {
        return $this->summary;
    }
    public function setDescription(?string $description) : void
    {
        $this->description = $description;
    }
    public function getDescription() : ?string
    {
        return $this->description;
    }
    public function setExternalDocs(?\PSX\Model\OpenAPI\ExternalDocs $externalDocs) : void
    {
        $this->externalDocs = $externalDocs;
    }
    public function getExternalDocs() : ?\PSX\Model\OpenAPI\ExternalDocs
    {
        return $this->externalDocs;
    }
    /**
     * @param array<ContentDescriptor|\PSX\Model\OpenAPI\Reference>|null $params
     */
    public function setParams(?array $params) : void
    {
        $this->params = $params;
    }
    public function getParams() : ?array
    {
        return $this->params;
    }
    public function setResult(ContentDescriptor|\PSX\Model\OpenAPI\Reference|null $result) : void
    {
        $this->result = $result;
    }
    public function getResult() : ContentDescriptor|\PSX\Model\OpenAPI\Reference|null
    {
        return $this->result;
    }
    public function setDeprecated(?bool $deprecated) : void
    {
        $this->deprecated = $deprecated;
    }
    public function getDeprecated() : ?bool
    {
        return $this->deprecated;
    }
    /**
     * @param array<\PSX\Model\OpenAPI\Server>|null $servers
     */
    public function setServers(?array $servers) : void
    {
        $this->servers = $servers;
    }
    public function getServers() : ?array
    {
        return $this->servers;
    }
    /**
     * @param array<Error|\PSX\Model\OpenAPI\Reference>|null $errors
     */
    public function setErrors(?array $errors) : void
    {
        $this->errors = $errors;
    }
    public function getErrors() : ?array
    {
        return $this->errors;
    }
    /**
     * @param array<Link|\PSX\Model\OpenAPI\Reference>|null $links
     */
    public function setLinks(?array $links) : void
    {
        $this->links = $links;
    }
    public function getLinks() : ?array
    {
        return $this->links;
    }
    public function setParamStructure(?string $paramStructure) : void
    {
        $this->paramStructure = $paramStructure;
    }
    public function getParamStructure() : ?string
    {
        return $this->paramStructure;
    }
    /**
     * @param array<ExamplePairingObject>|null $examples
     */
    public function setExamples(?array $examples) : void
    {
        $this->examples = $examples;
    }
    public function getExamples() : ?array
    {
        return $this->examples;
    }
    public function jsonSerialize() : object
    {
        return (object) array_filter(array('name' => $this->name, 'tags' => $this->tags, 'summary' => $this->summary, 'description' => $this->description, 'externalDocs' => $this->externalDocs, 'params' => $this->params, 'result' => $this->result, 'deprecated' => $this->deprecated, 'servers' => $this->servers, 'errors' => $this->errors, 'links' => $this->links, 'paramStructure' => $this->paramStructure, 'examples' => $this->examples), static function ($value) : bool {
            return $value !== null;
        });
    }
}

