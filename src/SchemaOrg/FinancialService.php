<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("Financial services business.")
 */
class FinancialService extends LocalBusiness implements \JsonSerializable
{
    /**
     * @var \PSX\Uri\Uri|string|null
     */
    protected $feesAndCommissionsSpecification;
    /**
     * @param \PSX\Uri\Uri|string|null $feesAndCommissionsSpecification
     */
    public function setFeesAndCommissionsSpecification($feesAndCommissionsSpecification) : void
    {
        $this->feesAndCommissionsSpecification = $feesAndCommissionsSpecification;
    }
    /**
     * @return \PSX\Uri\Uri|string|null
     */
    public function getFeesAndCommissionsSpecification()
    {
        return $this->feesAndCommissionsSpecification;
    }
    public function jsonSerialize()
    {
        return array_merge(parent::jsonSerialize(), array_filter(array('feesAndCommissionsSpecification' => $this->feesAndCommissionsSpecification), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
