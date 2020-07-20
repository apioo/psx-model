<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A set of characteristics describing parents, who can be interested in viewing some content.")
 */
class ParentAudience extends PeopleAudience implements \JsonSerializable
{
    /**
     * @var float|null
     */
    protected $childMaxAge;
    /**
     * @var float|null
     */
    protected $childMinAge;
    /**
     * @param float|null $childMaxAge
     */
    public function setChildMaxAge(?float $childMaxAge) : void
    {
        $this->childMaxAge = $childMaxAge;
    }
    /**
     * @return float|null
     */
    public function getChildMaxAge() : ?float
    {
        return $this->childMaxAge;
    }
    /**
     * @param float|null $childMinAge
     */
    public function setChildMinAge(?float $childMinAge) : void
    {
        $this->childMinAge = $childMinAge;
    }
    /**
     * @return float|null
     */
    public function getChildMinAge() : ?float
    {
        return $this->childMinAge;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('childMaxAge' => $this->childMaxAge, 'childMinAge' => $this->childMinAge), static function ($value) : bool {
            return $value !== null;
        });
    }
}
