<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A body of structured information describing some topic(s) of interest.")
 */
class Dataset extends CreativeWork implements \JsonSerializable
{
    /**
     * @var string|null
     */
    protected $issn;
    /**
     * @var DataCatalog|null
     */
    protected $includedInDataCatalog;
    /**
     * @var DataDownload|null
     */
    protected $distribution;
    /**
     * @param string|null $issn
     */
    public function setIssn(?string $issn) : void
    {
        $this->issn = $issn;
    }
    /**
     * @return string|null
     */
    public function getIssn() : ?string
    {
        return $this->issn;
    }
    /**
     * @param DataCatalog|null $includedInDataCatalog
     */
    public function setIncludedInDataCatalog(?DataCatalog $includedInDataCatalog) : void
    {
        $this->includedInDataCatalog = $includedInDataCatalog;
    }
    /**
     * @return DataCatalog|null
     */
    public function getIncludedInDataCatalog() : ?DataCatalog
    {
        return $this->includedInDataCatalog;
    }
    /**
     * @param DataDownload|null $distribution
     */
    public function setDistribution(?DataDownload $distribution) : void
    {
        $this->distribution = $distribution;
    }
    /**
     * @return DataDownload|null
     */
    public function getDistribution() : ?DataDownload
    {
        return $this->distribution;
    }
    public function jsonSerialize()
    {
        return array_merge(parent::jsonSerialize(), array_filter(array('issn' => $this->issn, 'includedInDataCatalog' => $this->includedInDataCatalog, 'distribution' => $this->distribution), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
