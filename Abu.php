<?php

class cookingOil
{
    public $brand = 'elianto';
    public $size = '5_litres';
    private $colour = 'yello';
    private $manufacturer;

    public function understandingCookingOilIndustry()
    {
        echo 'The cooking oil is of brand ' . $this->brand . ' It is ' . $this->size . ' in size,and it is ' . $this->colour;
    }
    public function setManufacturer($manufacturer)
    {
        $this->manufacturer = $manufacturer;
    }
        public function getManufacturer()
    {
        echo $this->manufacturer;
    }
}
$cooking_oil_2 = new cookingOil();
$cooking_oil_2->brand;
$cooking_oil_2->size;
//$cooking_oil_2->colour;
//$cooking_oil_2->manufacturer='New Comapny';
//echo $cooking_oil_2->manufacturer;
//$cooking_oil_2->understandingCookingOilIndustry();
$cooking_oil_2->setManufacturer('Laico');
$cooking_oil_2->getManufacturer();