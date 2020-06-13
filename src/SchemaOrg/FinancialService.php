<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("Financial services business.")
 */
class FinancialService extends LocalBusiness
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
}
