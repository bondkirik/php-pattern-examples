<?php

class Cook
{
    private BigMacBuilderInterface $builder;

    public function setBuilder(BigMacBuilderInterface $builder)
    {
        $this->builder = $builder;
        
        return $this;
    }

    public function cookStandardBigMac()
    {
        $builder = $this->getBuilder();

        $builder->produceBun();
        $builder->produceCheese();
        $builder->produceCucumber();
        $builder->produceMeat();
        $builder->produceOnion();
        $builder->produceSalad();
        $builder->produceSauce();

        return $builder->getBuilder();
    }

    public function cookVeganBigMac()
    {
        $builder = $this->getBuilder();

        $builder->produceBun();
        $builder->produceOnion();
        $builder->produceOnion();
        $builder->produceSalad();
        $builder->produceSalad();
        $builder->produceSauce();
        $builder->produceCheese();
        $builder->produceCucumber();

        return $builder->getBuilder();
    }

    public function getBuilder()
    {
        return $this->builder;
    }
    
}