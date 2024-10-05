<?php

include("./61-config.php");

if (isset($_REQUEST['btn'])) {


    $name = $_REQUEST['name'];
    $course = $_REQUEST['course'];
    $batch =  $_REQUEST['batch'];
    $city =  $_REQUEST['city'];
    $year =  $_REQUEST['year'];


    $student = $conn->prepare("INSERT INTO `students`(`id`, `name`, `course`, `batch`, `city`, `year`) VALUES (NULL,'$name', '$course','$batch','$city','$year')");


    $result = $student->execute();

    if ($result) {
        echo "true";
    } else {
        echo "false";
    }
}


// include("./60-config.php");

// if (isset($_REQUEST['btn'])) {

//     $name = $_REQUEST['name'];
//     $course = $_REQUEST['course'];
//     $batch = $_REQUEST['batch'];
//     $city = $_REQUEST['city'];
//     $year = $_REQUEST['year'];

    // $student = $conn->prepare("INSERT INTO `students`(`id`, `name`, `course`, `batch`, `city`, `year`) VALUES (null,'$name', '$course','$batch','$city','$year')");
//    if ($name && $course && $batch && $city && $year) {
//     $students->execute();
//     echo "successfull";
//    }else{
//     echo "file the all input section";
//     echo "<br>";
//     echo "<br>";
//    }
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
    <form action="" method="post">
        <input name="name" type="text" placeholder="enter name">
        <br>
        <br>
        <input name="course" type="text" placeholder="enter course">
        <br>
        <br>
        <input name="batch" type="text" placeholder="enter batch">
        <br>
        <br>
        <input name="city" type="text" placeholder="enter city">
        <br>
        <br>
        <input name="year" type="text" placeholder="enter year">
        <br>
        <br>
        <button type="submit" name="btn">Submit</button>

    </form>
</body>

</html>