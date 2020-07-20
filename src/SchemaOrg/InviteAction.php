<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("The act of asking someone to attend an event. Reciprocal of RsvpAction.")
 */
class InviteAction extends CommunicateAction implements \JsonSerializable
{
    /**
     * @var Event|null
     */
    protected $event;
    /**
     * @param Event|null $event
     */
    public function setEvent(?Event $event) : void
    {
        $this->event = $event;
    }
    /**
     * @return Event|null
     */
    public function getEvent() : ?Event
    {
        return $this->event;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('event' => $this->event), static function ($value) : bool {
            return $value !== null;
        });
    }
}
