<?php


namespace App\Services\FactoryDesignPattern;


class Service{

    public function run(){

        $a = Creator::getInstance(ProductType::TYPE_A);
        $a->run();


        $b = Creator::getInstance(ProductType::TYPE_B);
        $b->run();


        $c = Creator::getInstance(ProductType::TYPE_C);
        $c->run();


    }

}
