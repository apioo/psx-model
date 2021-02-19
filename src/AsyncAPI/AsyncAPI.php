<?php

declare(strict_types = 1);

namespace PSX\Model\AsyncAPI;

/**
 * @Description("This is the root document object for the API specification. It combines resource listing and API declaration together into one document.")
 * @Required({"asyncapi", "info", "channels"})
 */
class AsyncAPI implements \JsonSerializable
{
    /**
     * @var string|null
     */
    protected $asyncapi = '3.0.0';
    /**
     * @var \PSX\Model\OpenAPI\Info|null
     */
    protected $info;
    /**
     * @var array<\PSX\Model\OpenAPI\Server>|null
     */
    protected $servers;
    /**
     * @var Channels|null
     */
    protected $channels;
    /**
     * @var Components|null
     */
    protected $components;
    /**
     * @var array<\PSX\Model\OpenAPI\Tag>|null
     */
    protected $tags;
    /**
     * @var \PSX\Model\OpenAPI\ExternalDocs|null
     */
    protected $externalDocs;
    /**
     * @param string|null $asyncapi
     */
    public function setAsyncapi(?string $asyncapi) : void
    {
        $this->asyncapi = $asyncapi;
    }
    /**
     * @return string|null
     */
    public function getAsyncapi() : ?string
    {
        return $this->asyncapi;
    }
    /**
     * @param \PSX\Model\OpenAPI\Info|null $info
     */
    public function setInfo(?\PSX\Model\OpenAPI\Info $info) : void
    {
        $this->info = $info;
    }
    /**
     * @return \PSX\Model\OpenAPI\Info|null
     */
    public function getInfo() : ?\PSX\Model\OpenAPI\Info
    {
        return $this->info;
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
     * @param Channels|null $channels
     */
    public function setChannels(?Channels $channels) : void
    {
        $this->channels = $channels;
    }
    /**
     * @return Channels|null
     */
    public function getChannels() : ?Channels
    {
        return $this->channels;
    }
    /**
     * @param Components|null $components
     */
    public function setComponents(?Components $components) : void
    {
        $this->components = $components;
    }
    /**
     * @return Components|null
     */
    public function getComponents() : ?Components
    {
        return $this->components;
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
    public function jsonSerialize()
    {
        return (object) array_filter(array('asyncapi' => $this->asyncapi, 'info' => $this->info, 'servers' => $this->servers, 'channels' => $this->channels, 'components' => $this->components, 'tags' => $this->tags, 'externalDocs' => $this->externalDocs), static function ($value) : bool {
            return $value !== null;
        });
    }
}
