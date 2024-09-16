<?php
include('./config.php');

$get_students = $conn->prepare("select id, name from students");
$get_students->execute();
$studentsDate = $get_students->fetchAll();

echo "<select>";



foreach ($studentsDate as $student) {
    echo "<option value=".$student['id'].">".$student['name']."</option>";
}

echo "</select>";

?>