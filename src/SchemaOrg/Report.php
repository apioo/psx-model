<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A Report generated by governmental or non-governmental organization.")
 */
class Report extends Article implements \JsonSerializable
{
    /**
     * @var string|null
     */
    protected $reportNumber;
    /**
     * @param string|null $reportNumber
     */
    public function setReportNumber(?string $reportNumber) : void
    {
        $this->reportNumber = $reportNumber;
    }
    /**
     * @return string|null
     */
    public function getReportNumber() : ?string
    {
        return $this->reportNumber;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('reportNumber' => $this->reportNumber), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
