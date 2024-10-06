<?php

abstract class ProductsFeatures{
    abstract function ProductsDetails();
    abstract function ProductsImage();
    abstract function ProductsOwnerDetails();

    public function other(){
        echo "other function called";
    }

}


class UploadProduct extends ProductsFeatures{
    public function ProductsDetails()
    {
        echo "ProductsDetails";
    }

    public function ProductsImage()
    {
        echo "ProductsImage";
    }

    public function ProductsOwnerDetails()
    {
        echo "ProductsOwnerDetails";
    }
}


$ct = new UploadProduct();

$ct->ProductsDetails();
echo "<br>";

$ct->ProductsImage();
echo "<br>";

$ct->ProductsOwnerDetails();
echo "<br>";

$ct->other();
?>