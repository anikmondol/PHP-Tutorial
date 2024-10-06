<?php

class Company
{

    public function getName()
    {
        echo "this is honda motors";
        echo "<br>";
        return $this;
    }

    public function getEmp()
    {
        echo "this is company total emp 30";
        echo "<br>";
        return $this;
    }

    public function getSale()
    {
        echo "this is company total sale 800";
    }
}


$t1 = new Company();

$t1->getName()->getEmp()->getSale();
