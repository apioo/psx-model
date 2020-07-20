<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
* @Description("The act of gaining ownership of an object from an origin. Reciprocal of GiveAction.<br/><br/>

Related actions:<br/><br/>

<ul>
<li><a class=""localLink"" href=""http://schema.org/GiveAction"">GiveAction</a>: The reciprocal of TakeAction.</li>
<li><a class=""localLink"" href=""http://schema.org/ReceiveAction"">ReceiveAction</a>: Unlike ReceiveAction, TakeAction implies that ownership has been transfered.</li>
</ul>
")
*/
class TakeAction extends TransferAction implements \JsonSerializable
{
}
