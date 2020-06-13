<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
* @Description("An agent leaves an event / group with participants/friends at a location.<br/><br/>

Related actions:<br/><br/>

<ul>
<li><a class=""localLink"" href=""http://schema.org/JoinAction"">JoinAction</a>: The antonym of LeaveAction.</li>
<li><a class=""localLink"" href=""http://schema.org/UnRegisterAction"">UnRegisterAction</a>: Unlike UnRegisterAction, LeaveAction implies leaving a group/team of people rather than a service.</li>
</ul>
")
*/
class LeaveAction extends InteractAction
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
