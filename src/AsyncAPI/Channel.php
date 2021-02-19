<?php

declare(strict_types = 1);

namespace PSX\Model\AsyncAPI;


class Channel implements \JsonSerializable
{
    /**
     * @var string|null
     */
    protected $description;
    /**
     * @var Operation|null
     */
    protected $subscribe;
    /**
     * @var Operation|null
     */
    protected $publish;
    /**
     * @var \PSX\Model\OpenAPI\Parameters|null
     */
    protected $parameters;
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
     * @param Operation|null $subscribe
     */
    public function setSubscribe(?Operation $subscribe) : void
    {
        $this->subscribe = $subscribe;
    }
    /**
     * @return Operation|null
     */
    public function getSubscribe() : ?Operation
    {
        return $this->subscribe;
    }
    /**
     * @param Operation|null $publish
     */
    public function setPublish(?Operation $publish) : void
    {
        $this->publish = $publish;
    }
    /**
     * @return Operation|null
     */
    public function getPublish() : ?Operation
    {
        return $this->publish;
    }
    /**
     * @param \PSX\Model\OpenAPI\Parameters|null $parameters
     */
    public function setParameters(?\PSX\Model\OpenAPI\Parameters $parameters) : void
    {
        $this->parameters = $parameters;
    }
    /**
     * @return \PSX\Model\OpenAPI\Parameters|null
     */
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
