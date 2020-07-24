<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("An agent approves/certifies/likes/supports/sanction an object.")
 */
class EndorseAction extends ReactAction implements \JsonSerializable
{
    /**
     * @var Person|Organization|null
     */
    protected $endorsee;
    /**
     * @param Person|Organization|null $endorsee
     */
    public function setEndorsee($endorsee) : void
    {
        $this->endorsee = $endorsee;
    }
    /**
     * @return Person|Organization|null
     */
    public function getEndorsee()
    {
        return $this->endorsee;
    }
    public function jsonSerialize()
    {
        return array_merge(parent::jsonSerialize(), array_filter(array('endorsee' => $this->endorsee), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
