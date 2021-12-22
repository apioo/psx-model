<?php

declare(strict_types = 1);

namespace PSX\Model\AsyncAPI;

use PSX\Schema\Attribute\Description;
use PSX\Schema\Attribute\Required;

#[Description('This is the root document object for the API specification. It combines resource listing and API declaration together into one document.')]
#[Required(array('asyncapi', 'info', 'channels'))]
class AsyncAPI implements \JsonSerializable
{
    protected ?string $asyncapi = '3.0.0';
    protected ?\PSX\Model\OpenAPI\Info $info = null;
    /**
     * @var array<\PSX\Model\OpenAPI\Server>|null
     */
    protected ?array $servers = null;
    protected ?Channels $channels = null;
    protected ?Components $components = null;
    /**
     * @var array<\PSX\Model\OpenAPI\Tag>|null
     */
    protected ?array $tags = null;
    protected ?\PSX\Model\OpenAPI\ExternalDocs $externalDocs = null;
    public function setAsyncapi(?string $asyncapi) : void
    {
        $this->asyncapi = $asyncapi;
    }
    public function getAsyncapi() : ?string
    {
        return $this->asyncapi;
    }
    public function setInfo(?\PSX\Model\OpenAPI\Info $info) : void
    {
        $this->info = $info;
    }
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
    public function getServers() : ?array
    {
        return $this->servers;
    }
    public function setChannels(?Channels $channels) : void
    {
        $this->channels = $channels;
    }
    public function getChannels() : ?Channels
    {
        return $this->channels;
    }
    public function setComponents(?Components $components) : void
    {
        $this->components = $components;
    }
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
    public function getTags() : ?array
    {
        return $this->tags;
    }
    public function setExternalDocs(?\PSX\Model\OpenAPI\ExternalDocs $externalDocs) : void
    {
        $this->externalDocs = $externalDocs;
    }
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

