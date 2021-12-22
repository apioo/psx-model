<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The act of asking someone to attend an event. Reciprocal of RsvpAction.')]
class InviteAction extends CommunicateAction implements \JsonSerializable
{
    protected ?Event $event = null;
    public function setEvent(?Event $event) : void
    {
        $this->event = $event;
    }
    public function getEvent() : ?Event
    {
        return $this->event;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('event' => $this->event), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

