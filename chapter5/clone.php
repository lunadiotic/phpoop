<?php

class Product
{
    public $color;

    public function __construct()
    {
        echo "New product was created. <br/>";
    }

    public function __clone()
    {
        echo "New product was cloned. <br />";
    }
}

$shirt1 = new Product;
$shirt1->color = 'Blue';

$shirt2 = clone $shirt1;

echo $shirt1->color . "<br />";
echo $shirt2->color . "<br />";

echo "<hr>";

$shirt2->color = 'Red';

echo $shirt1->color . "<br />";
echo $shirt2->color . "<br />";
