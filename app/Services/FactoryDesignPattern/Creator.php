<?php

namespace App\Services\FactoryDesignPattern;


class Creator
{
    public static function getInstance(ProductType $type): IProduct
    {
        $product = null;

        if ($type== ProductType::TYPE_A){

            $product = new A();
        }

        if ($type== ProductType::TYPE_B){

            $product = new B();
        }
        if ($type== ProductType::TYPE_C){

            $product = new C();
        }

        return $product;


    }
}
