<?php

declare(strict_types = 1);

namespace PSX\Model\OpenAPI;

/**
 * @Description("Describes a single response from an API Operation, including design-time, static  `links` to operations based on the response.")
 * @Required({"description"})
 */
class Response implements \JsonSerializable
{
    /**
     * @var string|null
     */
    protected $description;
    /**
     * @var Header|Reference|null
     */
    protected $headers;
    /**
     * @var MediaTypes|null
     */
    protected $content;
    /**
     * @var Link|Reference|null
     */
    protected $links;
    /**
     * @param string|null $description
     */
    public function setDescription(?string $description) : void
    {
        $this->description = $description;
    }
    /**
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * @param Header|Reference|null $headers
     */
    public function setHeaders($headers) : void
    {
        $this->headers = $headers;
    }
    /**
     * @return Header|Reference|null
     */
    public function getHeaders()
    {
        return $this->headers;
    }
    /**
     * @param MediaTypes|null $content
     */
    public function setContent(?MediaTypes $content) : void
    {
        $this->content = $content;
    }
    /**
     * @return MediaTypes|null
     */
    public function getContent() : ?MediaTypes
    {
        return $this->content;
    }
    /**
     * @param Link|Reference|null $links
     */
    public function setLinks($links) : void
    {
        $this->links = $links;
    }
    /**
     * @return Link|Reference|null
     */
    public function getLinks()
    {
        return $this->links;
    }
    public function jsonSerialize()
    {
        return array_filter(array('description' => $this->description, 'headers' => $this->headers, 'content' => $this->content, 'links' => $this->links), static function ($value) : bool {
            return $value !== null;
        });
    }
}
