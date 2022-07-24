<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The act of searching for an object.<br/><br/>

Related actions:<br/><br/>

<ul>
<li><a class="localLink" href="http://schema.org/FindAction">FindAction</a>: SearchAction generally leads to a FindAction, but not necessarily.</li>
</ul>
')]
class SearchAction extends Action implements \JsonSerializable
{
    protected ?string $query = null;
    public function setQuery(?string $query) : void
    {
        $this->query = $query;
    }
    public function getQuery() : ?string
    {
        return $this->query;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('query' => $this->query), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

