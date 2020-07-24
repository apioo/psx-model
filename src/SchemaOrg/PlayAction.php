<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
* @Description("The act of playing/exercising/training/performing for enjoyment, leisure, recreation, Competition or exercise.<br/><br/>

Related actions:<br/><br/>

<ul>
<li><a class=""localLink"" href=""http://schema.org/ListenAction"">ListenAction</a>: Unlike ListenAction (which is under ConsumeAction), PlayAction refers to performing for an audience or at an event, rather than consuming music.</li>
<li><a class=""localLink"" href=""http://schema.org/WatchAction"">WatchAction</a>: Unlike WatchAction (which is under ConsumeAction), PlayAction refers to showing/displaying for an audience or at an event, rather than consuming visual content.</li>
</ul>
")
*/
class PlayAction extends Action implements \JsonSerializable
{
    /**
     * @var Audience|null
     */
    protected $audience;
    /**
     * @var Event|null
     */
    protected $event;
    /**
     * @param Audience|null $audience
     */
    public function setAudience(?Audience $audience) : void
    {
        $this->audience = $audience;
    }
    /**
     * @return Audience|null
     */
    public function getAudience() : ?Audience
    {
        return $this->audience;
    }
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
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('audience' => $this->audience, 'event' => $this->event), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
