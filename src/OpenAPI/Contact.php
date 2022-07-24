<?php

declare(strict_types = 1);

namespace PSX\Model\OpenAPI;

use PSX\Schema\Attribute\Description;

#[Description('Contact information for the exposed API.')]
class Contact implements \JsonSerializable
{
    protected ?string $name = null;
    protected ?string $url = null;
    protected ?string $email = null;
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
    public function setEmail(?string $email) : void
    {
        $this->email = $email;
    }
    public function getEmail() : ?string
    {
        return $this->email;
    }
    public function jsonSerialize() : object
    {
        return (object) array_filter(array('name' => $this->name, 'url' => $this->url, 'email' => $this->email), static function ($value) : bool {
            return $value !== null;
        });
    }
}

