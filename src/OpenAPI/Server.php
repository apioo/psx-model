<?php

declare(strict_types = 1);

namespace PSX\Model\OpenAPI;

/**
 * @Description("An object representing a Server.")
 * @Required({"url"})
 */
class Server implements \JsonSerializable
{
    /**
     * @var string|null
     */
    protected $url;
    /**
     * @var string|null
     */
    protected $description;
    /**
     * @var ServerVariables|null
     */
    protected $variables;
    /**
     * @param string|null $url
     */
    public function setUrl(?string $url) : void
    {
        $this->url = $url;
    }
    /**
     * @return string|null
     */
    public function getUrl() : ?string
    {
        return $this->url;
    }
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
     * @param ServerVariables|null $variables
     */
    public function setVariables(?ServerVariables $variables) : void
    {
        $this->variables = $variables;
    }
    /**
     * @return ServerVariables|null
     */
    public function getVariables() : ?ServerVariables
    {
        return $this->variables;
    }
    public function jsonSerialize()
    {
        return array_filter(array('url' => $this->url, 'description' => $this->description, 'variables' => $this->variables), static function ($value) : bool {
            return $value !== null;
        });
    }
}
