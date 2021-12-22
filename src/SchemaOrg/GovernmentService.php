<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A service provided by a government organization, e.g. food stamps, veterans benefits, etc.')]
class GovernmentService extends Service implements \JsonSerializable
{
    protected ?Organization $serviceOperator = null;
    public function setServiceOperator(?Organization $serviceOperator) : void
    {
        $this->serviceOperator = $serviceOperator;
    }
    public function getServiceOperator() : ?Organization
    {
        return $this->serviceOperator;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('serviceOperator' => $this->serviceOperator), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

