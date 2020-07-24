<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A WebSite is a set of related web pages and other items typically served from a single web domain and accessible via URLs.")
 */
class WebSite extends CreativeWork implements \JsonSerializable
{
    /**
     * @var string|null
     */
    protected $issn;
    /**
     * @param string|null $issn
     */
    public function setIssn(?string $issn) : void
    {
        $this->issn = $issn;
    }
    /**
     * @return string|null
     */
    public function getIssn() : ?string
    {
        return $this->issn;
    }
    public function jsonSerialize()
    {
        return array_merge(parent::jsonSerialize(), array_filter(array('issn' => $this->issn), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
