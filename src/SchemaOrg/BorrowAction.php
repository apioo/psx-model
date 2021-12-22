<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The act of obtaining an object under an agreement to return it at a later date. Reciprocal of LendAction.<br/><br/>

Related actions:<br/><br/>

<ul>
<li><a class="localLink" href="http://schema.org/LendAction">LendAction</a>: Reciprocal of BorrowAction.</li>
</ul>
')]
class BorrowAction extends TransferAction implements \JsonSerializable
{
    protected Organization|Person|null $lender = null;
    public function setLender(Organization|Person|null $lender) : void
    {
        $this->lender = $lender;
    }
    public function getLender() : Organization|Person|null
    {
        return $this->lender;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('lender' => $this->lender), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

