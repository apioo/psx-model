<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The act of authoring written creative content.')]
class WriteAction extends CreateAction implements \JsonSerializable
{
    protected string|Language|null $inLanguage = null;
    public function setInLanguage(string|Language|null $inLanguage) : void
    {
        $this->inLanguage = $inLanguage;
    }
    public function getInLanguage() : string|Language|null
    {
        return $this->inLanguage;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('inLanguage' => $this->inLanguage), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

