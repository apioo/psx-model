<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A datasheet or vendor specification of a product (in the sense of a prototypical description).")
 */
class ProductModel extends Product implements \JsonSerializable
{
    /**
     * @var ProductModel|null
     */
    protected $predecessorOf;
    /**
     * @var ProductModel|null
     */
    protected $successorOf;
    /**
     * @var ProductModel|null
     */
    protected $isVariantOf;
    /**
     * @param ProductModel|null $predecessorOf
     */
    public function setPredecessorOf(?ProductModel $predecessorOf) : void
    {
        $this->predecessorOf = $predecessorOf;
    }
    /**
     * @return ProductModel|null
     */
    public function getPredecessorOf() : ?ProductModel
    {
        return $this->predecessorOf;
    }
    /**
     * @param ProductModel|null $successorOf
     */
    public function setSuccessorOf(?ProductModel $successorOf) : void
    {
        $this->successorOf = $successorOf;
    }
    /**
     * @return ProductModel|null
     */
    public function getSuccessorOf() : ?ProductModel
    {
        return $this->successorOf;
    }
    /**
     * @param ProductModel|null $isVariantOf
     */
    public function setIsVariantOf(?ProductModel $isVariantOf) : void
    {
        $this->isVariantOf = $isVariantOf;
    }
    /**
     * @return ProductModel|null
     */
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
