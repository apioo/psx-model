<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The act of editing a recipient by replacing an old object with a new object.')]
class ReplaceAction extends UpdateAction implements \JsonSerializable
{
    protected ?Thing $replacee = null;
    protected ?Thing $replacer = null;
    public function setReplacee(?Thing $replacee) : void
    {
        $this->replacee = $replacee;
    }
    public function getReplacee() : ?Thing
    {
        return $this->replacee;
    }
    public function setReplacer(?Thing $replacer) : void
    {
        $this->replacer = $replacer;
    }
    public function getReplacer() : ?Thing
    {
        return $this->replacer;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('replacee' => $this->replacee, 'replacer' => $this->replacer), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

