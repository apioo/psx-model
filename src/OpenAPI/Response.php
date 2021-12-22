<?php

declare(strict_types = 1);

namespace PSX\Model\OpenAPI;

use PSX\Schema\Attribute\Description;
use PSX\Schema\Attribute\Required;

#[Description('Describes a single response from an API Operation, including design-time, static  `links` to operations based on the response.')]
#[Required(array('description'))]
class Response implements \JsonSerializable
{
    protected ?string $description = null;
    protected Header|Reference|null $headers = null;
    protected ?MediaTypes $content = null;
    protected Link|Reference|null $links = null;
    public function setDescription(?string $description) : void
    {
        $this->description = $description;
    }
    public function getDescription() : ?string
    {
        return $this->description;
    }
    public function setHeaders(Header|Reference|null $headers) : void
    {
        $this->headers = $headers;
    }
    public function getHeaders() : Header|Reference|null
    {
        return $this->headers;
    }
    public function setContent(?MediaTypes $content) : void
    {
        $this->content = $content;
    }
    public function getContent() : ?MediaTypes
    {
        return $this->content;
    }
    public function setLinks(Link|Reference|null $links) : void
    {
        $this->links = $links;
    }
    public function getLinks() : Link|Reference|null
    {
        return $this->links;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('description' => $this->description, 'headers' => $this->headers, 'content' => $this->content, 'links' => $this->links), static function ($value) : bool {
            return $value !== null;
        });
    }
}

