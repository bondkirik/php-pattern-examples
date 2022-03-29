<?php



class BigMacBuilder implements BigMacBuilderInterface
{
    private BigMac $bigMac;

    public function __construct()
    {
        $this->reset();
    }

    public function reset()
    {
        $this->bigMac = new BigMac();
    }

    public function getBuilder()
    {
        return $this->bigMac;
    }

    public function produceBun()
    {
        $this->bigMac->setIngredient('Bun');
    }

    public function produceMeat()
    {
        $this->bigMac->setIngredient('Meat');
    }

    public function produceSalad()
    {
        $this->bigMac->setIngredient('Salad');
    }

    public function produceCheese()
    {
        $this->bigMac->setIngredient('Cheese');
    }

    public function produceCucumber()
    {
        $this->bigMac->setIngredient('Cucumber');
    }

    public function produceSauce()
    {
        $this->bigMac->setIngredient('Sauce');
    }

    public function produceOnion()
    {
        $this->bigMac->setIngredient('Onion');
    }
}