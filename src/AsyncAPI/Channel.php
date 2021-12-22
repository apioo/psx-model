<?php

declare(strict_types = 1);

namespace PSX\Model\AsyncAPI;


class Channel implements \JsonSerializable
{
    protected ?string $description = null;
    protected ?Operation $subscribe = null;
    protected ?Operation $publish = null;
    protected ?\PSX\Model\OpenAPI\Parameters $parameters = null;
    public function setDescription(?string $description) : void
    {
        $this->description = $description;
    }
    public function getDescription() : ?string
    {
        return $this->description;
    }
    public function setSubscribe(?Operation $subscribe) : void
    {
        $this->subscribe = $subscribe;
    }
    public function getSubscribe() : ?Operation
    {
        return $this->subscribe;
    }
    public function setPublish(?Operation $publish) : void
    {
        $this->publish = $publish;
    }
    public function getPublish() : ?Operation
    {
        return $this->publish;
    }
    public function setParameters(?\PSX\Model\OpenAPI\Parameters $parameters) : void
    {
        $this->parameters = $parameters;
    }
    public function getParameters() : ?\PSX\Model\OpenAPI\Parameters
    {
        return $this->parameters;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('description' => $this->description, 'subscribe' => $this->subscribe, 'publish' => $this->publish, 'parameters' => $this->parameters), static function ($value) : bool {
            return $value !== null;
        });
    }
}

