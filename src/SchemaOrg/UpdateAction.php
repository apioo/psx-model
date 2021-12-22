<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The act of managing by changing/editing the state of the object.')]
class UpdateAction extends Action implements \JsonSerializable
{
    protected ?Thing $targetCollection = null;
    public function setTargetCollection(?Thing $targetCollection) : void
    {
        $this->targetCollection = $targetCollection;
    }
    public function getTargetCollection() : ?Thing
    {
        return $this->targetCollection;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('targetCollection' => $this->targetCollection), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

