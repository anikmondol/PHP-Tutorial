<?php

include("./student.php");
include("./teacher.php");

$Details = new student\JoiningDetails();
$Details1 = new teacher\JoiningDetails();

$Details->admissionDate();
echo "<br>";
$Details1->joiningDate();




?>