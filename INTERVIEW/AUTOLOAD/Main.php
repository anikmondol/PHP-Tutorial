<?php

function autoLoader($class){
    echo "<br>";
    echo $class.".php";
    echo "<br>";
    include($class.".php");
}

spl_autoload_register("autoLoader");

$teacher = new Teacher();
$student = new Student();
$management = new Management();

// $teacher;
// $student;


?>