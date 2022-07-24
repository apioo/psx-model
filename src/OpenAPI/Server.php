<?php

declare(strict_types = 1);

namespace PSX\Model\OpenAPI;

use PSX\Schema\Attribute\Description;
use PSX\Schema\Attribute\Required;

#[Description('An object representing a Server.')]
#[Required(array('url'))]
class Server implements \JsonSerializable
{
    protected ?string $url = null;
    protected ?string $description = null;
    protected ?ServerVariables $variables = null;
    public function setUrl(?string $url) : void
    {
        $this->url = $url;
    }
    public function getUrl() : ?string
    {
        return $this->url;
    }
    public function setDescription(?string $description) : void
    {
        $this->description = $description;
    }
    public function getDescription() : ?string
    {
        return $this->description;
    }
    public function setVariables(?ServerVariables $variables) : void
    {
        $this->variables = $variables;
    }
    public function getVariables() : ?ServerVariables
    {
        return $this->variables;
    }
    public function jsonSerialize() : object
    {
        return (object) array_filter(array('url' => $this->url, 'description' => $this->description, 'variables' => $this->variables), static function ($value) : bool {
            return $value !== null;
        });
    }
}

