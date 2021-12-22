<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A set of characteristics describing parents, who can be interested in viewing some content.')]
class ParentAudience extends PeopleAudience implements \JsonSerializable
{
    protected ?float $childMaxAge = null;
    protected ?float $childMinAge = null;
    public function setChildMaxAge(?float $childMaxAge) : void
    {
        $this->childMaxAge = $childMaxAge;
    }
    public function getChildMaxAge() : ?float
    {
        return $this->childMaxAge;
    }
    public function setChildMinAge(?float $childMinAge) : void
    {
        $this->childMinAge = $childMinAge;
    }
    public function getChildMinAge() : ?float
    {
        return $this->childMinAge;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('childMaxAge' => $this->childMaxAge, 'childMinAge' => $this->childMinAge), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

