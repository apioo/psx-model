<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A single feed providing structured information about one or more entities or topics.")
 */
class DataFeed extends Dataset implements \JsonSerializable
{
    /**
     * @var string|Thing|DataFeedItem|null
     */
    protected $dataFeedElement;
    /**
     * @param string|Thing|DataFeedItem|null $dataFeedElement
     */
    public function setDataFeedElement($dataFeedElement) : void
    {
        $this->dataFeedElement = $dataFeedElement;
    }
    /**
     * @return string|Thing|DataFeedItem|null
     */
    public function getDataFeedElement()
    {
        return $this->dataFeedElement;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('dataFeedElement' => $this->dataFeedElement), static function ($value) : bool {
            return $value !== null;
        });
    }
}
