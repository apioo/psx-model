<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The act of playing/exercising/training/performing for enjoyment, leisure, recreation, Competition or exercise.<br/><br/>

Related actions:<br/><br/>

<ul>
<li><a class="localLink" href="http://schema.org/ListenAction">ListenAction</a>: Unlike ListenAction (which is under ConsumeAction), PlayAction refers to performing for an audience or at an event, rather than consuming music.</li>
<li><a class="localLink" href="http://schema.org/WatchAction">WatchAction</a>: Unlike WatchAction (which is under ConsumeAction), PlayAction refers to showing/displaying for an audience or at an event, rather than consuming visual content.</li>
</ul>
')]
class PlayAction extends Action implements \JsonSerializable
{
    protected ?Audience $audience = null;
    protected ?Event $event = null;
    public function setAudience(?Audience $audience) : void
    {
        $this->audience = $audience;
    }
    public function getAudience() : ?Audience
    {
        return $this->audience;
    }
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
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('audience' => $this->audience, 'event' => $this->event), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

