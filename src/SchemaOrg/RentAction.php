<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("The act of giving money in return for temporary use, but not ownership, of an object such as a vehicle or property. For example, an agent rents a property from a landlord in exchange for a periodic payment.")
 */
class RentAction extends TradeAction implements \JsonSerializable
{
    /**
     * @var Person|Organization|null
     */
    protected $participant;
    /**
     * @var RealEstateAgent|null
     */
    protected $realEstateAgent;
    /**
     * @param Person|Organization|null $participant
     */
    public function setParticipant($participant) : void
    {
        $this->participant = $participant;
    }
    /**
     * @return Person|Organization|null
     */
    public function getParticipant()
    {
        return $this->participant;
    }
    /**
     * @param RealEstateAgent|null $realEstateAgent
     */
    public function setRealEstateAgent(?RealEstateAgent $realEstateAgent) : void
    {
        $this->realEstateAgent = $realEstateAgent;
    }
    /**
     * @return RealEstateAgent|null
     */
    public function getRealEstateAgent() : ?RealEstateAgent
    {
        return $this->realEstateAgent;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('participant' => $this->participant, 'realEstateAgent' => $this->realEstateAgent), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
