<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A permit issued by an organization, e.g. a parking pass.")
 */
class Permit extends Intangible implements \JsonSerializable
{
    /**
     * @var Audience|null
     */
    protected $permitAudience;
    /**
     * @var Service|null
     */
    protected $issuedThrough;
    /**
     * @var Duration|null
     */
    protected $validFor;
    /**
     * @var \PSX\DateTime\Date|null
     */
    protected $validUntil;
    /**
     * @var AdministrativeArea|null
     */
    protected $validIn;
    /**
     * @var \PSX\DateTime\Date|\DateTime|null
     */
    protected $validFrom;
    /**
     * @var Organization|null
     */
    protected $issuedBy;
    /**
     * @param Audience|null $permitAudience
     */
    public function setPermitAudience(?Audience $permitAudience) : void
    {
        $this->permitAudience = $permitAudience;
    }
    /**
     * @return Audience|null
     */
    public function getPermitAudience() : ?Audience
    {
        return $this->permitAudience;
    }
    /**
     * @param Service|null $issuedThrough
     */
    public function setIssuedThrough(?Service $issuedThrough) : void
    {
        $this->issuedThrough = $issuedThrough;
    }
    /**
     * @return Service|null
     */
    public function getIssuedThrough() : ?Service
    {
        return $this->issuedThrough;
    }
    /**
     * @param Duration|null $validFor
     */
    public function setValidFor(?Duration $validFor) : void
    {
        $this->validFor = $validFor;
    }
    /**
     * @return Duration|null
     */
    public function getValidFor() : ?Duration
    {
        return $this->validFor;
    }
    /**
     * @param \PSX\DateTime\Date|null $validUntil
     */
    public function setValidUntil(?\PSX\DateTime\Date $validUntil) : void
    {
        $this->validUntil = $validUntil;
    }
    /**
     * @return \PSX\DateTime\Date|null
     */
    public function getValidUntil() : ?\PSX\DateTime\Date
    {
        return $this->validUntil;
    }
    /**
     * @param AdministrativeArea|null $validIn
     */
    public function setValidIn(?AdministrativeArea $validIn) : void
    {
        $this->validIn = $validIn;
    }
    /**
     * @return AdministrativeArea|null
     */
    public function getValidIn() : ?AdministrativeArea
    {
        return $this->validIn;
    }
    /**
     * @param \PSX\DateTime\Date|\DateTime|null $validFrom
     */
    public function setValidFrom($validFrom) : void
    {
        $this->validFrom = $validFrom;
    }
    /**
     * @return \PSX\DateTime\Date|\DateTime|null
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }
    /**
     * @param Organization|null $issuedBy
     */
    public function setIssuedBy(?Organization $issuedBy) : void
    {
        $this->issuedBy = $issuedBy;
    }
    /**
     * @return Organization|null
     */
    public function getIssuedBy() : ?Organization
    {
        return $this->issuedBy;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('permitAudience' => $this->permitAudience, 'issuedThrough' => $this->issuedThrough, 'validFor' => $this->validFor, 'validUntil' => $this->validUntil, 'validIn' => $this->validIn, 'validFrom' => $this->validFrom, 'issuedBy' => $this->issuedBy), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
