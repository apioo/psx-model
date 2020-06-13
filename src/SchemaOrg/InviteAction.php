<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("The act of asking someone to attend an event. Reciprocal of RsvpAction.")
 */
class InviteAction extends CommunicateAction
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
}
