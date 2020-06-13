<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("The act of notifying someone of information pertinent to them, with no expectation of a response.")
 */
class InformAction extends CommunicateAction
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
