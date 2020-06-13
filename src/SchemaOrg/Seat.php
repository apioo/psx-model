<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("Used to describe a seat, such as a reserved seat in an event reservation.")
 */
class Seat extends Intangible
{
    /**
     * @var string|QualitativeValue|null
     */
    protected $seatingType;
    /**
     * @var string|null
     */
    protected $seatRow;
    /**
     * @var string|null
     */
    protected $seatSection;
    /**
     * @var string|null
     */
    protected $seatNumber;
    /**
     * @param string|QualitativeValue|null $seatingType
     */
    public function setSeatingType($seatingType) : void
    {
        $this->seatingType = $seatingType;
    }
    /**
     * @return string|QualitativeValue|null
     */
    public function getSeatingType()
    {
        return $this->seatingType;
    }
    /**
     * @param string|null $seatRow
     */
    public function setSeatRow(?string $seatRow) : void
    {
        $this->seatRow = $seatRow;
    }
    /**
     * @return string|null
     */
    public function getSeatRow() : ?string
    {
        return $this->seatRow;
    }
    /**
     * @param string|null $seatSection
     */
    public function setSeatSection(?string $seatSection) : void
    {
        $this->seatSection = $seatSection;
    }
    /**
     * @return string|null
     */
    public function getSeatSection() : ?string
    {
        return $this->seatSection;
    }
    /**
     * @param string|null $seatNumber
     */
    public function setSeatNumber(?string $seatNumber) : void
    {
        $this->seatNumber = $seatNumber;
    }
    /**
     * @return string|null
     */
    public function getSeatNumber() : ?string
    {
        return $this->seatNumber;
    }
}
