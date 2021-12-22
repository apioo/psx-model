<?php

declare(strict_types = 1);

namespace PSX\Model\OpenAPI;

use PSX\Schema\Attribute\Description;
use PSX\Schema\Attribute\Required;

#[Description('License information for the exposed API.')]
#[Required(array('name'))]
class License implements \JsonSerializable
{
    protected ?string $name = null;
    protected ?string $url = null;
    public function setName(?string $name) : void
    {
        $this->name = $name;
    }
    public function getName() : ?string
    {
        return $this->name;
    }
    public function setUrl(?string $url) : void
    {
        $this->url = $url;
    }
    public function getUrl() : ?string
    {
        return $this->url;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('name' => $this->name, 'url' => $this->url), static function ($value) : bool {
            return $value !== null;
        });
    }
}

