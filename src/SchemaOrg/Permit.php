<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A permit issued by an organization, e.g. a parking pass.')]
class Permit extends Intangible implements \JsonSerializable
{
    protected ?Audience $permitAudience = null;
    protected ?Service $issuedThrough = null;
    protected ?Duration $validFor = null;
    protected ?\PSX\DateTime\Date $validUntil = null;
    protected ?AdministrativeArea $validIn = null;
    protected \PSX\DateTime\Date|\DateTime|null $validFrom = null;
    protected ?Organization $issuedBy = null;
    public function setPermitAudience(?Audience $permitAudience) : void
    {
        $this->permitAudience = $permitAudience;
    }
    public function getPermitAudience() : ?Audience
    {
        return $this->permitAudience;
    }
    public function setIssuedThrough(?Service $issuedThrough) : void
    {
        $this->issuedThrough = $issuedThrough;
    }
    public function getIssuedThrough() : ?Service
    {
        return $this->issuedThrough;
    }
    public function setValidFor(?Duration $validFor) : void
    {
        $this->validFor = $validFor;
    }
    public function getValidFor() : ?Duration
    {
        return $this->validFor;
    }
    public function setValidUntil(?\PSX\DateTime\Date $validUntil) : void
    {
        $this->validUntil = $validUntil;
    }
    public function getValidUntil() : ?\PSX\DateTime\Date
    {
        return $this->validUntil;
    }
    public function setValidIn(?AdministrativeArea $validIn) : void
    {
        $this->validIn = $validIn;
    }
    public function getValidIn() : ?AdministrativeArea
    {
        return $this->validIn;
    }
    public function setValidFrom(\PSX\DateTime\Date|\DateTime|null $validFrom) : void
    {
        $this->validFrom = $validFrom;
    }
    public function getValidFrom() : \PSX\DateTime\Date|\DateTime|null
    {
        return $this->validFrom;
    }
    public function setIssuedBy(?Organization $issuedBy) : void
    {
        $this->issuedBy = $issuedBy;
    }
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

