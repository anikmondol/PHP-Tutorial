<?php
include("./61-config.php");

session_start();

$get_students = $conn->prepare("SELECT * FROM `students`");
$get_students->execute();
$students= $get_students->fetchAll();

// foreach ($students as $key => $student) {
//    print_r($student);
// }

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



    <table border="1">
        <thead>
            <tr>
                <th>S.N</th>
                <th>Name</th>
                <th>Course</th>
                <th>Batch</th>
                <th>City</th>
                <th>Year</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $num = 0;
            foreach ($students as $key => $student) { ?>
            <tr>
                <td> <?= $num++; ?> </td>
                <td> <?= $student['name'] ?> </td>
                <td> <?= $student['course'] ?> </td>
                <td> <?= $student['batch'] ?> </td>
                <td> <?= $student['city'] ?> </td>
                <td> <?= $student['year'] ?> </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>