<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A body of structured information describing some topic(s) of interest.')]
class Dataset extends CreativeWork implements \JsonSerializable
{
    protected ?string $issn = null;
    protected ?DataCatalog $includedInDataCatalog = null;
    protected ?DataDownload $distribution = null;
    public function setIssn(?string $issn) : void
    {
        $this->issn = $issn;
    }
    public function getIssn() : ?string
    {
        return $this->issn;
    }
    public function setIncludedInDataCatalog(?DataCatalog $includedInDataCatalog) : void
    {
        $this->includedInDataCatalog = $includedInDataCatalog;
    }
    public function getIncludedInDataCatalog() : ?DataCatalog
    {
        return $this->includedInDataCatalog;
    }
    public function setDistribution(?DataDownload $distribution) : void
    {
        $this->distribution = $distribution;
    }
    public function getDistribution() : ?DataDownload
    {
        return $this->distribution;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('issn' => $this->issn, 'includedInDataCatalog' => $this->includedInDataCatalog, 'distribution' => $this->distribution), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

