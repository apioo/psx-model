<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The act of expressing a preference from a set of options or a large or unbounded set of choices/options.')]
class ChooseAction extends AssessAction implements \JsonSerializable
{
    protected Thing|string|null $actionOption = null;
    public function setActionOption(Thing|string|null $actionOption) : void
    {
        $this->actionOption = $actionOption;
    }
    public function getActionOption() : Thing|string|null
    {
        return $this->actionOption;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('actionOption' => $this->actionOption), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

