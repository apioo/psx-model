<?php

declare(strict_types = 1);

namespace PSX\Model\OpenAPI;

use PSX\Schema\Attribute\Description;
use PSX\Schema\Attribute\Required;

#[Description('Allows referencing an external resource for extended documentation.')]
#[Required(array('url'))]
class ExternalDocs implements \JsonSerializable
{
    protected ?string $description = null;
    protected ?string $url = null;
    public function setDescription(?string $description) : void
    {
        $this->description = $description;
    }
    public function getDescription() : ?string
    {
        return $this->description;
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
        return (object) array_filter(array('description' => $this->description, 'url' => $this->url), static function ($value) : bool {
            return $value !== null;
        });
    }
}

