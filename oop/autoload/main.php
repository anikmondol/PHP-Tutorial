<?php

 function autoLoader($class){
    include($class.".php");
}

spl_autoload_register('autoLoader');


// include('teacher.php');

$c1 = new teacher();
echo "<br>";
$c2 = new student();
echo "<br>";
$c2 = new management();


?>