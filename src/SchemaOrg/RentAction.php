<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The act of giving money in return for temporary use, but not ownership, of an object such as a vehicle or property. For example, an agent rents a property from a landlord in exchange for a periodic payment.')]
class RentAction extends TradeAction implements \JsonSerializable
{
    protected Person|Organization|null $participant = null;
    protected ?RealEstateAgent $realEstateAgent = null;
    public function setParticipant(Person|Organization|null $participant) : void
    {
        $this->participant = $participant;
    }
    public function getParticipant() : Person|Organization|null
    {
        return $this->participant;
    }
    public function setRealEstateAgent(?RealEstateAgent $realEstateAgent) : void
    {
        $this->realEstateAgent = $realEstateAgent;
    }
    public function getRealEstateAgent() : ?RealEstateAgent
    {
        return $this->realEstateAgent;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('participant' => $this->participant, 'realEstateAgent' => $this->realEstateAgent), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

