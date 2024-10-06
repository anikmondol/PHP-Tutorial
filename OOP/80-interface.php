<?php

interface ProductFeatures{
    public function image();
    public function ownerDetails();

}

class Products implements ProductFeatures{

    public function image()
    {
        echo "image";
    }

    public function ownerDetails()
    {
        echo "ownerDetails";
    }

}

$t1 = new Products();

$t1->image();
echo "<br>";
$t1->ownerDetails();


?>