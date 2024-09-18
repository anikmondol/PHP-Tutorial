<?php

interface ProductFeatures{
    public function images();
    public function ownerDetails();
}


class Am implements ProductFeatures {
    public function images() {
        echo "image";
    }

    public function ownerDetails() {
        echo "ownerDetails";
    }
}

$product = new Am();

$product->images();
echo "<br>";
$product->ownerDetails();


?>