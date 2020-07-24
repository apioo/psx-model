<?php

declare(strict_types = 1);

namespace PSX\Model\Atom;


class Person implements \JsonSerializable
{
    /**
     * @var string|null
     */
    protected $name;
    /**
     * @var string|null
     */
    protected $uri;
    /**
     * @var string|null
     */
    protected $email;
    /**
     * @param string|null $name
     */
    public function setName(?string $name) : void
    {
        $this->name = $name;
    }
    /**
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * @param string|null $uri
     */
    public function setUri(?string $uri) : void
    {
        $this->uri = $uri;
    }
    /**
     * @return string|null
     */
    public function getUri() : ?string
    {
        return $this->uri;
    }
    /**
     * @param string|null $email
     */
    public function setEmail(?string $email) : void
    {
        $this->email = $email;
    }
    /**
     * @return string|null
     */
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
