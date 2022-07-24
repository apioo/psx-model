<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A WebSite is a set of related web pages and other items typically served from a single web domain and accessible via URLs.')]
class WebSite extends CreativeWork implements \JsonSerializable
{
    protected ?string $issn = null;
    public function setIssn(?string $issn) : void
    {
        $this->issn = $issn;
    }
    public function getIssn() : ?string
    {
        return $this->issn;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('issn' => $this->issn), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

