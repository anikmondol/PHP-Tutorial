<?php

include("./teacher.php");
include("./student.php");

$teacher = new  teacher\Joining();
$teacher->joiningDate();

echo "<br>";

$student = new  student\Joining();
$student->admissionDate();


?>