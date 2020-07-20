<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
* @Description("An agent tracks an object for updates.<br/><br/>

Related actions:<br/><br/>

<ul>
<li><a class=""localLink"" href=""http://schema.org/FollowAction"">FollowAction</a>: Unlike FollowAction, TrackAction refers to the interest on the location of innanimates objects.</li>
<li><a class=""localLink"" href=""http://schema.org/SubscribeAction"">SubscribeAction</a>: Unlike SubscribeAction, TrackAction refers to  the interest on the location of innanimate objects.</li>
</ul>
")
*/
class TrackAction extends FindAction implements \JsonSerializable
{
    /**
     * @var Thing|DeliveryMethod|null
     */
    protected $deliveryMethod;
    /**
     * @param Thing|DeliveryMethod|null $deliveryMethod
     */
    public function setDeliveryMethod($deliveryMethod) : void
    {
        $this->deliveryMethod = $deliveryMethod;
    }
    /**
     * @return Thing|DeliveryMethod|null
     */
    public function getDeliveryMethod()
    {
        return $this->deliveryMethod;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('deliveryMethod' => $this->deliveryMethod), static function ($value) : bool {
            return $value !== null;
        });
    }
}
