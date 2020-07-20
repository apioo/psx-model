<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
* @Description("The act of notifying someone that a future event/action is going to happen as expected.<br/><br/>

Related actions:<br/><br/>

<ul>
<li><a class=""localLink"" href=""http://schema.org/CancelAction"">CancelAction</a>: The antonym of ConfirmAction.</li>
</ul>
")
*/
class ConfirmAction extends InformAction implements \JsonSerializable
{
}
