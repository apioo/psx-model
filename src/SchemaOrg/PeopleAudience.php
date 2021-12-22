<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A set of characteristics belonging to people, e.g. who compose an item\'s target audience.')]
class PeopleAudience extends Audience implements \JsonSerializable
{
    protected ?string $suggestedGender = null;
    protected ?string $requiredGender = null;
    protected ?float $suggestedMinAge = null;
    protected ?int $requiredMaxAge = null;
    protected ?int $requiredMinAge = null;
    protected ?float $suggestedMaxAge = null;
    public function setSuggestedGender(?string $suggestedGender) : void
    {
        $this->suggestedGender = $suggestedGender;
    }
    public function getSuggestedGender() : ?string
    {
        return $this->suggestedGender;
    }
    public function setRequiredGender(?string $requiredGender) : void
    {
        $this->requiredGender = $requiredGender;
    }
    public function getRequiredGender() : ?string
    {
        return $this->requiredGender;
    }
    public function setSuggestedMinAge(?float $suggestedMinAge) : void
    {
        $this->suggestedMinAge = $suggestedMinAge;
    }
    public function getSuggestedMinAge() : ?float
    {
        return $this->suggestedMinAge;
    }
    public function setRequiredMaxAge(?int $requiredMaxAge) : void
    {
        $this->requiredMaxAge = $requiredMaxAge;
    }
    public function getRequiredMaxAge() : ?int
    {
        return $this->requiredMaxAge;
    }
    public function setRequiredMinAge(?int $requiredMinAge) : void
    {
        $this->requiredMinAge = $requiredMinAge;
    }
    public function getRequiredMinAge() : ?int
    {
        return $this->requiredMinAge;
    }
    public function setSuggestedMaxAge(?float $suggestedMaxAge) : void
    {
        $this->suggestedMaxAge = $suggestedMaxAge;
    }
    public function getSuggestedMaxAge() : ?float
    {
        return $this->suggestedMaxAge;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('suggestedGender' => $this->suggestedGender, 'requiredGender' => $this->requiredGender, 'suggestedMinAge' => $this->suggestedMinAge, 'requiredMaxAge' => $this->requiredMaxAge, 'requiredMinAge' => $this->requiredMinAge, 'suggestedMaxAge' => $this->suggestedMaxAge), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

