<?php

declare(strict_types = 1);

namespace PSX\Model\OpenRPC;

use PSX\Schema\Attribute\Description;

#[Description('The example Pairing object consists of a set of example params and result. The result is what you can expect from the JSON-RPC service given the exact params.')]
class ExamplePairingObject implements \JsonSerializable
{
    protected ?string $name = null;
    protected ?string $description = null;
    protected ?string $summary = null;
    /**
     * @var array<ExampleObject>|null
     */
    protected ?array $params = null;
    protected ?ExampleObject $result = null;
    public function setName(?string $name) : void
    {
        $this->name = $name;
    }
    public function getName() : ?string
    {
        return $this->name;
    }
    public function setDescription(?string $description) : void
    {
        $this->description = $description;
    }
    public function getDescription() : ?string
    {
        return $this->description;
    }
    public function setSummary(?string $summary) : void
    {
        $this->summary = $summary;
    }
    public function getSummary() : ?string
    {
        return $this->summary;
    }
    /**
     * @param array<ExampleObject>|null $params
     */
    public function setParams(?array $params) : void
    {
        $this->params = $params;
    }
    public function getParams() : ?array
    {
        return $this->params;
    }
    public function setResult(?ExampleObject $result) : void
    {
        $this->result = $result;
    }
    public function getResult() : ?ExampleObject
    {
        return $this->result;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('name' => $this->name, 'description' => $this->description, 'summary' => $this->summary, 'params' => $this->params, 'result' => $this->result), static function ($value) : bool {
            return $value !== null;
        });
    }
}

