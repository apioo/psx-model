<?php

declare(strict_types = 1);

namespace PSX\Model\OpenRPC;

/**
 * @Description("Describes a single API operation on a path.")
 * @Required({"name", "params", "result"})
 */
class Method implements \JsonSerializable
{
    /**
     * @var string|null
     */
    protected $name;
    /**
     * @var array<\PSX\Model\OpenAPI\Tag>|null
     */
    protected $tags;
    /**
     * @var string|null
     */
    protected $summary;
    /**
     * @var string|null
     */
    protected $description;
    /**
     * @var \PSX\Model\OpenAPI\ExternalDocs|null
     */
    protected $externalDocs;
    /**
     * @var array<ContentDescriptor|\PSX\Model\OpenAPI\Reference>|null
     */
    protected $params;
    /**
     * @var ContentDescriptor|\PSX\Model\OpenAPI\Reference|null
     */
    protected $result;
    /**
     * @var bool|null
     */
    protected $deprecated;
    /**
     * @var array<\PSX\Model\OpenAPI\Server>|null
     */
    protected $servers;
    /**
     * @var array<Error|\PSX\Model\OpenAPI\Reference>|null
     */
    protected $errors;
    /**
     * @var array<Link|\PSX\Model\OpenAPI\Reference>|null
     */
    protected $links;
    /**
     * @var string|null
     * @Enum({"by-name", "by-position", "either"})
     */
    protected $paramStructure;
    /**
     * @var array<ExamplePairingObject>|null
     */
    protected $examples;
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
     * @param array<\PSX\Model\OpenAPI\Tag>|null $tags
     */
    public function setTags(?array $tags) : void
    {
        $this->tags = $tags;
    }
    /**
     * @return array<\PSX\Model\OpenAPI\Tag>|null
     */
    public function getTags() : ?array
    {
        return $this->tags;
    }
    /**
     * @param string|null $summary
     */
    public function setSummary(?string $summary) : void
    {
        $this->summary = $summary;
    }
    /**
     * @return string|null
     */
    public function getSummary() : ?string
    {
        return $this->summary;
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
     * @param \PSX\Model\OpenAPI\ExternalDocs|null $externalDocs
     */
    public function setExternalDocs(?\PSX\Model\OpenAPI\ExternalDocs $externalDocs) : void
    {
        $this->externalDocs = $externalDocs;
    }
    /**
     * @return \PSX\Model\OpenAPI\ExternalDocs|null
     */
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
    /**
     * @return array<ContentDescriptor|\PSX\Model\OpenAPI\Reference>|null
     */
    public function getParams() : ?array
    {
        return $this->params;
    }
    /**
     * @param ContentDescriptor|\PSX\Model\OpenAPI\Reference|null $result
     */
    public function setResult($result) : void
    {
        $this->result = $result;
    }
    /**
     * @return ContentDescriptor|\PSX\Model\OpenAPI\Reference|null
     */
    public function getResult()
    {
        return $this->result;
    }
    /**
     * @param bool|null $deprecated
     */
    public function setDeprecated(?bool $deprecated) : void
    {
        $this->deprecated = $deprecated;
    }
    /**
     * @return bool|null
     */
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
    /**
     * @return array<\PSX\Model\OpenAPI\Server>|null
     */
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
    /**
     * @return array<Error|\PSX\Model\OpenAPI\Reference>|null
     */
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
    /**
     * @return array<Link|\PSX\Model\OpenAPI\Reference>|null
     */
    public function getLinks() : ?array
    {
        return $this->links;
    }
    /**
     * @param string|null $paramStructure
     */
    public function setParamStructure(?string $paramStructure) : void
    {
        $this->paramStructure = $paramStructure;
    }
    /**
     * @return string|null
     */
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
    /**
     * @return array<ExamplePairingObject>|null
     */
    public function getExamples() : ?array
    {
        return $this->examples;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('name' => $this->name, 'tags' => $this->tags, 'summary' => $this->summary, 'description' => $this->description, 'externalDocs' => $this->externalDocs, 'params' => $this->params, 'result' => $this->result, 'deprecated' => $this->deprecated, 'servers' => $this->servers, 'errors' => $this->errors, 'links' => $this->links, 'paramStructure' => $this->paramStructure, 'examples' => $this->examples), static function ($value) : bool {
            return $value !== null;
        });
    }
}
