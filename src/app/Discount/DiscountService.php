<?php

namespace App\Discount;

class DiscountService
{
    private $discount;
    private $price;
    private $precentDiscount;
    private $newPrice;

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function setDiscount($discount)
    {
        $this->discount = $discount;
    }

    public function count()
    {
        
        $this->newPrice =  (int)$this->price - (int)$this->price / 100 * $this->discount;
    }

    public function addPrecentDiscount()
    {
        $this->precentDiscount = $this->discount . '%';
    }

    public function getPrecentDiscount()
    {
        return $this->precentDiscount;
    }


    public function getNewPrice(): int
    {
        return (int)$this->newPrice;
    }

    public function getPrice()
    {
        return $this->price;
    }
}