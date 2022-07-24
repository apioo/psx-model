<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('An order item is a line of an order. It includes the quantity and shipping details of a bought offer.')]
class OrderItem extends Intangible implements \JsonSerializable
{
    protected ?ParcelDelivery $orderDelivery = null;
    protected ?OrderStatus $orderItemStatus = null;
    protected ?float $orderQuantity = null;
    protected ?string $orderItemNumber = null;
    protected Product|Service|OrderItem|null $orderedItem = null;
    public function setOrderDelivery(?ParcelDelivery $orderDelivery) : void
    {
        $this->orderDelivery = $orderDelivery;
    }
    public function getOrderDelivery() : ?ParcelDelivery
    {
        return $this->orderDelivery;
    }
    public function setOrderItemStatus(?OrderStatus $orderItemStatus) : void
    {
        $this->orderItemStatus = $orderItemStatus;
    }
    public function getOrderItemStatus() : ?OrderStatus
    {
        return $this->orderItemStatus;
    }
    public function setOrderQuantity(?float $orderQuantity) : void
    {
        $this->orderQuantity = $orderQuantity;
    }
    public function getOrderQuantity() : ?float
    {
        return $this->orderQuantity;
    }
    public function setOrderItemNumber(?string $orderItemNumber) : void
    {
        $this->orderItemNumber = $orderItemNumber;
    }
    public function getOrderItemNumber() : ?string
    {
        return $this->orderItemNumber;
    }
    public function setOrderedItem(Product|Service|OrderItem|null $orderedItem) : void
    {
        $this->orderedItem = $orderedItem;
    }
    public function getOrderedItem() : Product|Service|OrderItem|null
    {
        return $this->orderedItem;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('orderDelivery' => $this->orderDelivery, 'orderItemStatus' => $this->orderItemStatus, 'orderQuantity' => $this->orderQuantity, 'orderItemNumber' => $this->orderItemNumber, 'orderedItem' => $this->orderedItem), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

