<?php

trait ParentCompany1{
    public function getEmp(){
        echo 200;
    }
}

trait ParentCompany2{
    public function getEmp(){
        echo 400;
    }
}


class Company{


    use ParentCompany1{
        ParentCompany2::getEmp insteadOf  ParentCompany1;
        ParentCompany1:: getEmp as getEmpCompany1;
    }


    use ParentCompany2;
    
    // use ParentCompany2{
    //     ParentCompany1::getEmp insteadOf ParentCompany2;
    // }

    // public function getEmp(){
    //     echo 100;
    // }

}

$c1 = new Company();

$c1->getEmp();
echo "<br>";
$c1->getEmpCompany1();


?>