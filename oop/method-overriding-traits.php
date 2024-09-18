<?php


trait ParentCompany1
{
    public function getEmp()
    {
        echo 20240;
    }
}


trait ParentCompany2
{
    public function getEmp()
    {
        echo 400;
    }
}



class Company
{
    use ParentCompany1;
    use ParentCompany2{
        ParentCompany1::getEmp insteadOf ParentCompany2;
        ParentCompany2::getEmp as getEmp2;
    }

    // public function getEmp()
    // {
    //     echo 100;
    // }
}



$c1 = new Company();
$c1->getEmp();
echo "<br>";
$c1->getEmp2();
