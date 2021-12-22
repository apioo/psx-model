<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A datasheet or vendor specification of a product (in the sense of a prototypical description).')]
class ProductModel extends Product implements \JsonSerializable
{
    protected ?ProductModel $predecessorOf = null;
    protected ?ProductModel $successorOf = null;
    protected ?ProductModel $isVariantOf = null;
    public function setPredecessorOf(?ProductModel $predecessorOf) : void
    {
        $this->predecessorOf = $predecessorOf;
    }
    public function getPredecessorOf() : ?ProductModel
    {
        return $this->predecessorOf;
    }
    public function setSuccessorOf(?ProductModel $successorOf) : void
    {
        $this->successorOf = $successorOf;
    }
    public function getSuccessorOf() : ?ProductModel
    {
        return $this->successorOf;
    }
    public function setIsVariantOf(?ProductModel $isVariantOf) : void
    {
        $this->isVariantOf = $isVariantOf;
    }
    public function getIsVariantOf() : ?ProductModel
    {
        return $this->isVariantOf;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('predecessorOf' => $this->predecessorOf, 'successorOf' => $this->successorOf, 'isVariantOf' => $this->isVariantOf), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

