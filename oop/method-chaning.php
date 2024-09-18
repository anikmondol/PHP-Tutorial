<?php

class Company{

    public function getName(){
        echo "This is Honda Motors.";
        return $this;
    }

    public function getEmp(){
        echo " Honda has 3000 Employees.";
        return $this;
    }
    
    public function getMoney(){
        echo " Honda get 1000 Money.";
    }

}


$company = new Company();

$company->getName()->getEmp()->getMoney();


?>