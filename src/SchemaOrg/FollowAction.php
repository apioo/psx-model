<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
* @Description("The act of forming a personal connection with someone/something (object) unidirectionally/asymmetrically to get updates polled from.<br/><br/>

Related actions:<br/><br/>

<ul>
<li><a class=""localLink"" href=""http://schema.org/BefriendAction"">BefriendAction</a>: Unlike BefriendAction, FollowAction implies that the connection is <em>not</em> necessarily reciprocal.</li>
<li><a class=""localLink"" href=""http://schema.org/SubscribeAction"">SubscribeAction</a>: Unlike SubscribeAction, FollowAction implies that the follower acts as an active agent constantly/actively polling for updates.</li>
<li><a class=""localLink"" href=""http://schema.org/RegisterAction"">RegisterAction</a>: Unlike RegisterAction, FollowAction implies that the agent is interested in continuing receiving updates from the object.</li>
<li><a class=""localLink"" href=""http://schema.org/JoinAction"">JoinAction</a>: Unlike JoinAction, FollowAction implies that the agent is interested in getting updates from the object.</li>
<li><a class=""localLink"" href=""http://schema.org/TrackAction"">TrackAction</a>: Unlike TrackAction, FollowAction refers to the polling of updates of all aspects of animate objects rather than the location of inanimate objects (e.g. you track a package, but you don't follow it).</li>
</ul>
")
*/
class FollowAction extends InteractAction implements \JsonSerializable
{
    /**
     * @var Organization|Person|null
     */
    protected $followee;
    /**
     * @param Organization|Person|null $followee
     */
    public function setFollowee($followee) : void
    {
        $this->followee = $followee;
    }
    /**
     * @return Organization|Person|null
     */
    public function getFollowee()
    {
        return $this->followee;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('followee' => $this->followee), static function ($value) : bool {
            return $value !== null;
        });
    }
}
