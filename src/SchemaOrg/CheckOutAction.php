<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
* @Description("The act of an agent communicating (service provider, social media, etc) their departure of a previously reserved service (e.g. flight check in) or place (e.g. hotel).<br/><br/>

Related actions:<br/><br/>

<ul>
<li><a class=""localLink"" href=""http://schema.org/CheckInAction"">CheckInAction</a>: The antonym of CheckOutAction.</li>
<li><a class=""localLink"" href=""http://schema.org/DepartAction"">DepartAction</a>: Unlike DepartAction, CheckOutAction implies that the agent is informing/confirming the end of a previously reserved service.</li>
<li><a class=""localLink"" href=""http://schema.org/CancelAction"">CancelAction</a>: Unlike CancelAction, CheckOutAction implies that the agent is informing/confirming the end of a previously reserved service.</li>
</ul>
")
*/
class CheckOutAction extends CommunicateAction
{
}
