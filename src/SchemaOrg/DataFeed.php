<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A single feed providing structured information about one or more entities or topics.')]
class DataFeed extends Dataset implements \JsonSerializable
{
    protected string|Thing|DataFeedItem|null $dataFeedElement = null;
    public function setDataFeedElement(string|Thing|DataFeedItem|null $dataFeedElement) : void
    {
        $this->dataFeedElement = $dataFeedElement;
    }
    public function getDataFeedElement() : string|Thing|DataFeedItem|null
    {
        return $this->dataFeedElement;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('dataFeedElement' => $this->dataFeedElement), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

