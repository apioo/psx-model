<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The act of an agent relocating to a place.<br/><br/>

Related actions:<br/><br/>

<ul>
<li><a class="localLink" href="http://schema.org/TransferAction">TransferAction</a>: Unlike TransferAction, the subject of the move is a living Person or Organization rather than an inanimate object.</li>
</ul>
')]
class MoveAction extends Action implements \JsonSerializable
{
    protected ?Place $fromLocation = null;
    protected ?Place $toLocation = null;
    public function setFromLocation(?Place $fromLocation) : void
    {
        $this->fromLocation = $fromLocation;
    }
    public function getFromLocation() : ?Place
    {
        return $this->fromLocation;
    }
    public function setToLocation(?Place $toLocation) : void
    {
        $this->toLocation = $toLocation;
    }
    public function getToLocation() : ?Place
    {
        return $this->toLocation;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('fromLocation' => $this->fromLocation, 'toLocation' => $this->toLocation), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

