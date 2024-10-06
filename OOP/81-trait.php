<?php

trait parenCompany1{
   public function getTotalEmp(){
    echo 200;
   }
}

trait parenCompany2{
    public function getTotalSale(){
     echo 1000;
    }
 }

class Company{
    use parenCompany1;
    use parenCompany2;
}

$t1 = new Company();

$t1->getTotalSale();
echo "<br>";
$t1->getTotalEmp();

?>