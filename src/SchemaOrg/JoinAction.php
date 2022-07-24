<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('An agent joins an event/group with participants/friends at a location.<br/><br/>

Related actions:<br/><br/>

<ul>
<li><a class="localLink" href="http://schema.org/RegisterAction">RegisterAction</a>: Unlike RegisterAction, JoinAction refers to joining a group/team of people.</li>
<li><a class="localLink" href="http://schema.org/SubscribeAction">SubscribeAction</a>: Unlike SubscribeAction, JoinAction does not imply that you\'ll be receiving updates.</li>
<li><a class="localLink" href="http://schema.org/FollowAction">FollowAction</a>: Unlike FollowAction, JoinAction does not imply that you\'ll be polling for updates.</li>
</ul>
')]
class JoinAction extends InteractAction implements \JsonSerializable
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
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('event' => $this->event), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

