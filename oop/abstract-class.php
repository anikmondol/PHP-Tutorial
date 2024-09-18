<?php

abstract class ProductFeatures{
    abstract function product_details();
    abstract function product_image();
    abstract function product_owner();

    function common(){
        echo "common products";
    }

}


class UploadProduct extends ProductFeatures{
     function product_details(){
        echo "product_details";
    }
     function product_image(){
         echo "product_image";
    }
     function product_owner(){
        echo "product_owner";
     }

     function other(){
        echo "other";
     }
}

// $pro = new ProductFeatures();

$upload = new UploadProduct();

$upload->product_details();
echo "<br>";
$upload->product_image();
echo "<br>";
$upload->product_owner();
echo "<br>";
$upload->common();
echo "<br>";
$upload->other();


?>