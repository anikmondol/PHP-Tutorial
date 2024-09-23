<?php

trait ParentCompany{
    public function getEmp(){
        echo 200;
    }
}


trait ParentCompany1{
    public function getEmp(){
        echo 100;
    }
}

class Company{

    use ParentCompany;
    use ParentCompany1{
        ParentCompany::getEmp insteadOf ParentCompany1;
        ParentCompany1::getEmp as getEmp10;
    }

   
}


$c1 = new Company();

$c1->getEmp();

echo "<br>";

$c1->getEmp10();


?>