<?php

declare(strict_types = 1);

namespace PSX\Model\Atom;


class Person implements \JsonSerializable
{
    protected ?string $name = null;
    protected ?string $uri = null;
    protected ?string $email = null;
    public function setName(?string $name) : void
    {
        $this->name = $name;
    }
    public function getName() : ?string
    {
        return $this->name;
    }
    public function setUri(?string $uri) : void
    {
        $this->uri = $uri;
    }
    public function getUri() : ?string
    {
        return $this->uri;
    }
    public function setEmail(?string $email) : void
    {
        $this->email = $email;
    }
    public function getEmail() : ?string
    {
        return $this->email;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('name' => $this->name, 'uri' => $this->uri, 'email' => $this->email), static function ($value) : bool {
            return $value !== null;
        });
    }
}

