<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A collection of datasets.")
 */
class DataCatalog extends CreativeWork
{
    /**
     * @var Dataset|null
     */
    protected $dataset;
    /**
     * @param Dataset|null $dataset
     */
    public function setDataset(?Dataset $dataset) : void
    {
        $this->dataset = $dataset;
    }
    /**
     * @return Dataset|null
     */
    public function getDataset() : ?Dataset
    {
        return $this->dataset;
    }
}
