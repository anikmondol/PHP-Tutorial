<?php

include("./83-teacher.php");
include("./83-student.php");


$teacher = new teacher\JoiningDetails();
$student = new student\JoiningDetails();

$teacher->joiningDate();
echo "<br>"; 
$student->admissionDate();




?>