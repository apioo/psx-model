<?php

declare(strict_types = 1);

namespace PSX\Model\Atom;


class Person
{
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $uri;
    /**
     * @var string
     */
    protected $email;
    /**
     * @param string $name
     */
    public function setName(?string $name)
    {
        $this->name = $name;
    }
    /**
     * @return string
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * @param string $uri
     */
    public function setUri(?string $uri)
    {
        $this->uri = $uri;
    }
    /**
     * @return string
     */
    public function getUri() : ?string
    {
        return $this->uri;
    }
    /**
     * @param string $email
     */
    public function setEmail(?string $email)
    {
        $this->email = $email;
    }
    /**
     * @return string
     */
    public function getEmail() : ?string
    {
        return $this->email;
    }
}
