<?php


trait ParentCompany1{
    public function getTotalEmp(){
        echo 500;
    }

    public function getTotalProject(){
        echo 50;
    }
}

trait ParentCompany2{
    public function getTotalOffice(){
        echo 400;
    }
}

class Company{
    use ParentCompany1;
    use ParentCompany2;

    public function anik(){
        echo "anik";
    }
}


$cmp = new Company();

$cmp->getTotalEmp();
echo "<br>";
$cmp->getTotalOffice();
echo "<br>";
$cmp->getTotalProject();
echo "<br>";
$cmp->anik();

?>