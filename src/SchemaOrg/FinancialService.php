<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('Financial services business.')]
class FinancialService extends LocalBusiness implements \JsonSerializable
{
    protected \PSX\Uri\Uri|string|null $feesAndCommissionsSpecification = null;
    public function setFeesAndCommissionsSpecification(\PSX\Uri\Uri|string|null $feesAndCommissionsSpecification) : void
    {
        $this->feesAndCommissionsSpecification = $feesAndCommissionsSpecification;
    }
    public function getFeesAndCommissionsSpecification() : \PSX\Uri\Uri|string|null
    {
        return $this->feesAndCommissionsSpecification;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('feesAndCommissionsSpecification' => $this->feesAndCommissionsSpecification), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

