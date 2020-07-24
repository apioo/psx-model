<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("The act of authoring written creative content.")
 */
class WriteAction extends CreateAction implements \JsonSerializable
{
    /**
     * @var string|Language|null
     */
    protected $inLanguage;
    /**
     * @param string|Language|null $inLanguage
     */
    public function setInLanguage($inLanguage) : void
    {
        $this->inLanguage = $inLanguage;
    }
    /**
     * @return string|Language|null
     */
    public function getInLanguage()
    {
        return $this->inLanguage;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('inLanguage' => $this->inLanguage), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
