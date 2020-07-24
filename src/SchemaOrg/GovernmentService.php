<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A service provided by a government organization, e.g. food stamps, veterans benefits, etc.")
 */
class GovernmentService extends Service implements \JsonSerializable
{
    /**
     * @var Organization|null
     */
    protected $serviceOperator;
    /**
     * @param Organization|null $serviceOperator
     */
    public function setServiceOperator(?Organization $serviceOperator) : void
    {
        $this->serviceOperator = $serviceOperator;
    }
    /**
     * @return Organization|null
     */
    public function getServiceOperator() : ?Organization
    {
        return $this->serviceOperator;
    }
    public function jsonSerialize()
    {
        return array_merge(parent::jsonSerialize(), array_filter(array('serviceOperator' => $this->serviceOperator), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
