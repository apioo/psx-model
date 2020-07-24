<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
* @Description("The act of searching for an object.<br/><br/>

Related actions:<br/><br/>

<ul>
<li><a class=""localLink"" href=""http://schema.org/FindAction"">FindAction</a>: SearchAction generally leads to a FindAction, but not necessarily.</li>
</ul>
")
*/
class SearchAction extends Action implements \JsonSerializable
{
    /**
     * @var string|null
     */
    protected $query;
    /**
     * @param string|null $query
     */
    public function setQuery(?string $query) : void
    {
        $this->query = $query;
    }
    /**
     * @return string|null
     */
    public function getQuery() : ?string
    {
        return $this->query;
    }
    public function jsonSerialize()
    {
        return array_merge(parent::jsonSerialize(), array_filter(array('query' => $this->query), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
