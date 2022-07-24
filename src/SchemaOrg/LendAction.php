<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The act of providing an object under an agreement that it will be returned at a later date. Reciprocal of BorrowAction.<br/><br/>

Related actions:<br/><br/>

<ul>
<li><a class="localLink" href="http://schema.org/BorrowAction">BorrowAction</a>: Reciprocal of LendAction.</li>
</ul>
')]
class LendAction extends TransferAction implements \JsonSerializable
{
    protected ?Person $borrower = null;
    public function setBorrower(?Person $borrower) : void
    {
        $this->borrower = $borrower;
    }
    public function getBorrower() : ?Person
    {
        return $this->borrower;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('borrower' => $this->borrower), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

