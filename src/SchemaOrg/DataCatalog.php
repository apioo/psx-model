<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A collection of datasets.')]
class DataCatalog extends CreativeWork implements \JsonSerializable
{
    protected ?Dataset $dataset = null;
    public function setDataset(?Dataset $dataset) : void
    {
        $this->dataset = $dataset;
    }
    public function getDataset() : ?Dataset
    {
        return $this->dataset;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('dataset' => $this->dataset), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

