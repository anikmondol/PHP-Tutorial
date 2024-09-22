<?php

trait parentCompany1{
    public function getPrice(){
        echo "totals price: ". 100;
    }
}

trait parentCompany2{
    public function getSale(){
        echo "totals sale: ". 100;
    }
}



class Company {
    use parentCompany1;
    use parentCompany2;
}



$company = new Company();

$company->getSale();
echo "<br>";
$company->getPrice();


?>