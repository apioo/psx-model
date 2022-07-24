<?php

declare(strict_types = 1);

namespace PSX\Model\OpenAPI;

use PSX\Schema\Attribute\Description;

#[Description('A single encoding definition applied to a single schema property.')]
class Encoding implements \JsonSerializable
{
    protected ?string $contentType = null;
    protected ?Headers $headers = null;
    protected ?string $style = null;
    protected ?bool $explode = null;
    protected ?bool $allowReserved = null;
    public function setContentType(?string $contentType) : void
    {
        $this->contentType = $contentType;
    }
    public function getContentType() : ?string
    {
        return $this->contentType;
    }
    public function setHeaders(?Headers $headers) : void
    {
        $this->headers = $headers;
    }
    public function getHeaders() : ?Headers
    {
        return $this->headers;
    }
    public function setStyle(?string $style) : void
    {
        $this->style = $style;
    }
    public function getStyle() : ?string
    {
        return $this->style;
    }
    public function setExplode(?bool $explode) : void
    {
        $this->explode = $explode;
    }
    public function getExplode() : ?bool
    {
        return $this->explode;
    }
    public function setAllowReserved(?bool $allowReserved) : void
    {
        $this->allowReserved = $allowReserved;
    }
    public function getAllowReserved() : ?bool
    {
        return $this->allowReserved;
    }
    public function jsonSerialize() : object
    {
        return (object) array_filter(array('contentType' => $this->contentType, 'headers' => $this->headers, 'style' => $this->style, 'explode' => $this->explode, 'allowReserved' => $this->allowReserved), static function ($value) : bool {
            return $value !== null;
        });
    }
}

