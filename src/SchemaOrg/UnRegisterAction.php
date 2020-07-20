<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
* @Description("The act of un-registering from a service.<br/><br/>

Related actions:<br/><br/>

<ul>
<li><a class=""localLink"" href=""http://schema.org/RegisterAction"">RegisterAction</a>: antonym of UnRegisterAction.</li>
<li><a class=""localLink"" href=""http://schema.org/LeaveAction"">LeaveAction</a>: Unlike LeaveAction, UnRegisterAction implies that you are unregistering from a service you werer previously registered, rather than leaving a team/group of people.</li>
</ul>
")
*/
class UnRegisterAction extends InteractAction implements \JsonSerializable
{
}
