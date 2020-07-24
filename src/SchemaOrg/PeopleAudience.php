<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A set of characteristics belonging to people, e.g. who compose an item's target audience.")
 */
class PeopleAudience extends Audience implements \JsonSerializable
{
    /**
     * @var string|null
     */
    protected $suggestedGender;
    /**
     * @var string|null
     */
    protected $requiredGender;
    /**
     * @var float|null
     */
    protected $suggestedMinAge;
    /**
     * @var int|null
     */
    protected $requiredMaxAge;
    /**
     * @var int|null
     */
    protected $requiredMinAge;
    /**
     * @var float|null
     */
    protected $suggestedMaxAge;
    /**
     * @param string|null $suggestedGender
     */
    public function setSuggestedGender(?string $suggestedGender) : void
    {
        $this->suggestedGender = $suggestedGender;
    }
    /**
     * @return string|null
     */
    public function getSuggestedGender() : ?string
    {
        return $this->suggestedGender;
    }
    /**
     * @param string|null $requiredGender
     */
    public function setRequiredGender(?string $requiredGender) : void
    {
        $this->requiredGender = $requiredGender;
    }
    /**
     * @return string|null
     */
    public function getRequiredGender() : ?string
    {
        return $this->requiredGender;
    }
    /**
     * @param float|null $suggestedMinAge
     */
    public function setSuggestedMinAge(?float $suggestedMinAge) : void
    {
        $this->suggestedMinAge = $suggestedMinAge;
    }
    /**
     * @return float|null
     */
    public function getSuggestedMinAge() : ?float
    {
        return $this->suggestedMinAge;
    }
    /**
     * @param int|null $requiredMaxAge
     */
    public function setRequiredMaxAge(?int $requiredMaxAge) : void
    {
        $this->requiredMaxAge = $requiredMaxAge;
    }
    /**
     * @return int|null
     */
    public function getRequiredMaxAge() : ?int
    {
        return $this->requiredMaxAge;
    }
    /**
     * @param int|null $requiredMinAge
     */
    public function setRequiredMinAge(?int $requiredMinAge) : void
    {
        $this->requiredMinAge = $requiredMinAge;
    }
    /**
     * @return int|null
     */
    public function getRequiredMinAge() : ?int
    {
        return $this->requiredMinAge;
    }
    /**
     * @param float|null $suggestedMaxAge
     */
    public function setSuggestedMaxAge(?float $suggestedMaxAge) : void
    {
        $this->suggestedMaxAge = $suggestedMaxAge;
    }
    /**
     * @return float|null
     */
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
